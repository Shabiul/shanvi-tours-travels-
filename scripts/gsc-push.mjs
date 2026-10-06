#!/usr/bin/env node
/**
 * Shanvi Tours & Travels - Search Console & Instant Indexing Push Tool
 *
 * Capabilities:
 *  1. Google Indexing API: Directly notifies Googlebot of URL updates (requires Google Service Account JSON).
 *  2. Google Search Console Sitemaps API: Submits sitemaps directly to GSC.
 *  3. IndexNow Push: Instantly notifies Bing, Yandex, Seznam, and partner engines.
 *  4. Live Health Check: Verifies live HTTP status of domain, all sitemaps, robots.txt, and canonical URLs.
 *
 * Usage:
 *  node scripts/gsc-push.mjs --check              # Live audit of all URLs & sitemaps
 *  node scripts/gsc-push.mjs --google             # Push to Google Indexing API (looks for service-account.json)
 *  node scripts/gsc-push.mjs --google --key ./key.json
 *  node scripts/gsc-push.mjs --indexnow           # Push to IndexNow API (Bing / Yandex / Seznam)
 *  node scripts/gsc-push.mjs --all                # Run diagnostics and all configured push services
 */

import fs from 'node:fs';
import path from 'node:path';
import crypto from 'node:crypto';

const ROOT_DIR = path.resolve(import.meta.dirname, '..');
const CONFIG_PATH = path.join(ROOT_DIR, 'seo-engine.config.json');

// Load project config
let config = {
  domain: 'https://www.shanvitoursandtravels.com',
};
if (fs.existsSync(CONFIG_PATH)) {
  try {
    config = { ...config, ...JSON.parse(fs.readFileSync(CONFIG_PATH, 'utf8')) };
  } catch (e) {
    console.warn(`[Config] Notice: ${e.message}`);
  }
}

const DOMAIN = config.domain.replace(/\/+$/, '');

// Extract URLs from sitemap-pages.xml or fallback list
function getTargetUrls() {
  const sitemapPagesPath = path.join(ROOT_DIR, 'sitemap-pages.xml');
  if (fs.existsSync(sitemapPagesPath)) {
    const xml = fs.readFileSync(sitemapPagesPath, 'utf8');
    const matches = [...xml.matchAll(/<loc>([^<]+)<\/loc>/g)].map(m => m[1].trim());
    if (matches.length > 0) return matches;
  }
  return [
    `${DOMAIN}/`,
    `${DOMAIN}/services.php`,
    `${DOMAIN}/fleet.php`,
    `${DOMAIN}/gallery.php`,
    `${DOMAIN}/about.php`,
    `${DOMAIN}/contact.php`,
  ];
}

const SITEMAP_ENDPOINTS = [
  `${DOMAIN}/sitemap.xml`,
  `${DOMAIN}/sitemap-pages.xml`,
  `${DOMAIN}/sitemap-images.xml`,
  `${DOMAIN}/sitemap-videos.xml`,
];

// Helper: Parse CLI arguments
const args = process.argv.slice(2);
function getArg(flag, fallback = null) {
  const idx = args.indexOf(flag);
  return idx !== -1 && args[idx + 1] ? args[idx + 1] : fallback;
}

const runAll = args.includes('--all');
const runCheck = args.includes('--check') || runAll || args.length === 0;
const runGoogle = args.includes('--google') || runAll;
const runIndexNow = args.includes('--indexnow') || runAll;
const customKeyPath = getArg('--key', process.env.GOOGLE_APPLICATION_CREDENTIALS || null);

console.log(`\n======================================================================`);
console.log(` Shanvi Tours & Travels - Search Engine Indexing Push Engine`);
console.log(` Canonical Domain: ${DOMAIN}`);
console.log(`======================================================================\n`);

// -----------------------------------------------------------------------------
// MODULE 1: Live Health & Readiness Audit
// -----------------------------------------------------------------------------
async function auditLiveEndpoints() {
  console.log(`[Phase 1] Auditing Live Endpoints & Sitemaps on ${DOMAIN}...`);
  const urlsToCheck = [
    `${DOMAIN}/`,
    `${DOMAIN}/robots.txt`,
    ...SITEMAP_ENDPOINTS,
    `${DOMAIN}/fleet.php`,
    `${DOMAIN}/services.php`,
  ];

  let allPassed = true;
  for (const url of urlsToCheck) {
    try {
      const res = await fetch(url, { method: 'GET', headers: { 'User-Agent': 'Googlebot/2.1' } });
      const statusStr = res.status === 200 ? '\x1b[32m200 OK\x1b[0m' : `\x1b[31m${res.status}\x1b[0m`;
      const ct = res.headers.get('content-type') || 'unknown';
      console.log(`  - [${statusStr}] ${url.padEnd(58)} (${ct.split(';')[0]})`);
      if (res.status !== 200) allPassed = false;
    } catch (err) {
      console.log(`  - [\x1b[31mERR\x1b[0m] ${url.padEnd(58)} (${err.message})`);
      allPassed = false;
    }
  }

  console.log(`\n  Result: ${allPassed ? '\x1b[32mALL ENDPOINTS HEALTHY & REACHABLE\x1b[0m' : '\x1b[33mSOME ENDPOINTS RETURNED NON-200\x1b[0m'}\n`);
  return allPassed;
}

// -----------------------------------------------------------------------------
// MODULE 2: Google Indexing API Push (Native Node.js RS256 JWT, zero dependencies)
// -----------------------------------------------------------------------------
function findServiceAccountKey() {
  if (customKeyPath && fs.existsSync(path.resolve(customKeyPath))) {
    return path.resolve(customKeyPath);
  }
  const possiblePaths = [
    path.join(ROOT_DIR, 'service-account.json'),
    path.join(ROOT_DIR, 'gsc-key.json'),
    path.join(ROOT_DIR, 'google-service-account.json'),
    path.join(ROOT_DIR, 'credentials.json'),
  ];
  for (const p of possiblePaths) {
    if (fs.existsSync(p)) return p;
  }
  return null;
}

function base64Url(str) {
  return Buffer.from(str)
    .toString('base64')
    .replace(/=/g, '')
    .replace(/\+/g, '-')
    .replace(/\//g, '_');
}

async function getGoogleAccessToken(serviceAccount) {
  const iat = Math.floor(Date.now() / 1000);
  const exp = iat + 3600;

  const header = { alg: 'RS256', typ: 'JWT' };
  const claimSet = {
    iss: serviceAccount.client_email,
    scope: 'https://www.googleapis.com/auth/indexing https://www.googleapis.com/auth/webmasters',
    aud: 'https://oauth2.googleapis.com/token',
    exp,
    iat,
  };

  const encodedHeader = base64Url(JSON.stringify(header));
  const encodedClaimSet = base64Url(JSON.stringify(claimSet));
  const signatureInput = `${encodedHeader}.${encodedClaimSet}`;

  const signer = crypto.createSign('RSA-SHA256');
  signer.update(signatureInput);
  const signature = signer.sign(serviceAccount.private_key);
  const encodedSignature = base64Url(signature);

  const jwt = `${signatureInput}.${encodedSignature}`;

  const tokenRes = await fetch('https://oauth2.googleapis.com/token', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: new URLSearchParams({
      grant_type: 'urn:ietf:params:oauth:grant-type:jwt-bearer',
      assertion: jwt,
    }),
  });

  if (!tokenRes.ok) {
    const errorBody = await tokenRes.text();
    throw new Error(`Failed to obtain Google access token: ${tokenRes.status} ${errorBody}`);
  }

  const data = await tokenRes.json();
  return data.access_token;
}

async function pushToGoogleIndexingApi() {
  console.log(`[Phase 2] Pushing URLs to Google Indexing API...`);
  const keyFile = findServiceAccountKey();

  if (!keyFile) {
    console.log(`\x1b[33m  [!] No Google Cloud Service Account JSON file detected.\x1b[0m`);
    console.log(`      To enable automated direct pushing to Google's Indexing API:`);
    console.log(`      1. Create a Service Account in Google Cloud Console with 'Indexing API' enabled.`);
    console.log(`      2. Download the JSON key file and place it in the project root as 'service-account.json'.`);
    console.log(`      3. Add the Service Account email (e.g. your-bot@project.iam.gserviceaccount.com) as an Owner/Full user in Google Search Console.`);
    console.log(`      4. Run: node scripts/gsc-push.mjs --google --key ./service-account.json\n`);
    return false;
  }

  console.log(`  Found credentials file: ${path.basename(keyFile)}`);
  let serviceAccount;
  try {
    serviceAccount = JSON.parse(fs.readFileSync(keyFile, 'utf8'));
  } catch (e) {
    console.error(`  Error reading credentials file: ${e.message}`);
    return false;
  }

  if (!serviceAccount.client_email || !serviceAccount.private_key) {
    console.error(`  Invalid service account file: missing client_email or private_key`);
    return false;
  }

  console.log(`  Service Account: ${serviceAccount.client_email}`);

  let token;
  try {
    token = await getGoogleAccessToken(serviceAccount);
    console.log(`  \x1b[32mSuccessfully authenticated with Google OAuth2!\x1b[0m\n`);
  } catch (e) {
    console.error(`  \x1b[31mAuthentication failed:\x1b[0m ${e.message}`);
    return false;
  }

  const targetUrls = getTargetUrls();
  console.log(`  Notifying Googlebot for ${targetUrls.length} URLs...`);

  for (const url of targetUrls) {
    try {
      const res = await fetch('https://indexing.googleapis.com/v3/urlNotifications:publish', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          Authorization: `Bearer ${token}`,
        },
        body: JSON.stringify({
          url,
          type: 'URL_UPDATED',
        }),
      });

      if (res.ok) {
        const body = await res.json();
        const notifyTime = body.urlNotificationMetadata?.latestUpdate?.notifyTime || new Date().toISOString();
        console.log(`  - [\x1b[32mSUCCESS 200\x1b[0m] ${url}`);
        console.log(`    Timestamp: ${notifyTime}`);
      } else {
        const errText = await res.text();
        console.log(`  - [\x1b[31mHTTP ${res.status}\x1b[0m] ${url}`);
        console.log(`    Response: ${errText}`);
      }
    } catch (err) {
      console.log(`  - [\x1b[31mERR\x1b[0m] ${url}: ${err.message}`);
    }
  }

  // Also submit sitemap via Search Console Webmasters API
  console.log(`\n  Submitting master sitemap index via Search Console Webmasters API...`);
  try {
    const sitemapUrl = `${DOMAIN}/sitemap.xml`;
    const apiUrl = `https://www.googleapis.com/webmasters/v3/sites/${encodeURIComponent(DOMAIN + '/')}/sitemaps/${encodeURIComponent(sitemapUrl)}`;
    const res = await fetch(apiUrl, {
      method: 'PUT',
      headers: { Authorization: `Bearer ${token}` },
    });
    if (res.ok || res.status === 204) {
      console.log(`  - [\x1b[32mSUCCESS\x1b[0m] Master sitemap submitted to Search Console API: ${sitemapUrl}`);
    } else {
      const body = await res.text();
      console.log(`  - [Search Console API ${res.status}]: ${body}`);
    }
  } catch (err) {
    console.log(`  - [Search Console API Notice]: ${err.message}`);
  }

  console.log(`\n  Google Indexing API push completed!\n`);
  return true;
}

// -----------------------------------------------------------------------------
// MODULE 3: IndexNow Instant Push (Bing, Yandex, Seznam, Naver)
// -----------------------------------------------------------------------------
async function pushToIndexNow() {
  console.log(`[Phase 3] Pushing URLs to IndexNow Protocol (Bing, Yandex, Seznam)...`);

  // IndexNow requires a key file on the site
  const key = 'shanvi2026indexnow49travels01';
  const keyFile = path.join(ROOT_DIR, `${key}.txt`);
  if (!fs.existsSync(keyFile)) {
    fs.writeFileSync(keyFile, key, 'utf8');
    console.log(`  Generated IndexNow key file: ${key}.txt`);
  }

  const targetUrls = getTargetUrls();
  const host = new URL(DOMAIN).hostname;

  const payload = {
    host,
    key,
    keyLocation: `${DOMAIN}/${key}.txt`,
    urlList: targetUrls,
  };

  try {
    const res = await fetch('https://api.indexnow.org/indexnow', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json; charset=utf-8',
      },
      body: JSON.stringify(payload),
    });

    if (res.status === 200 || res.status === 202) {
      console.log(`  \x1b[32m[SUCCESS ${res.status}]\x1b[0m Successfully pushed ${targetUrls.length} URLs to IndexNow!`);
      console.log(`  Participating search engines (Bing, Yandex, Seznam) have queued these URLs for crawling.\n`);
    } else {
      const text = await res.text();
      console.log(`  \x1b[33m[IndexNow HTTP ${res.status}]\x1b[0m: ${text}`);
      if (res.status === 422) {
        console.log(`  Note: Ensure '${key}.txt' is deployed to the live server root so IndexNow can verify key ownership.\n`);
      }
    }
  } catch (err) {
    console.log(`  \x1b[31m[IndexNow ERR]\x1b[0m ${err.message}\n`);
  }
}

// -----------------------------------------------------------------------------
// MODULE 4: Google Search Console Dashboard Instructions
// -----------------------------------------------------------------------------
function printGscInstructions() {
  console.log(`======================================================================`);
  console.log(` GOOGLE SEARCH CONSOLE (GSC) PUSH CHECKLIST & INSTRUCTIONS`);
  console.log(`======================================================================`);
  console.log(`
1. SITEMAP SUBMISSION IN GSC CONSOLE:
   - Visit: https://search.google.com/search-console
   - Select property: ${DOMAIN}
   - In left menu, click "Sitemaps"
   - Under "Add a new sitemap", submit:
       -> sitemap.xml          (Master Sitemap Index)
       -> sitemap-pages.xml    (Priority 1.0 & 0.8 Page URLs)
       -> sitemap-images.xml   (75+ Geo-tagged Media Assets)
       -> sitemap-videos.xml   (Commercial Fleet Video Assets)

2. INSTANT URL INSPECTION & CRAWL REQUEST (Instant Googlebot Trigger):
   - In the top search bar of GSC ("Inspect any URL in '${DOMAIN}'"), paste each URL:
       1) ${DOMAIN}/
       2) ${DOMAIN}/services.php
       3) ${DOMAIN}/fleet.php
       4) ${DOMAIN}/gallery.php
       5) ${DOMAIN}/about.php
       6) ${DOMAIN}/contact.php
   - After the inspection loads, click the button:
       [ REQUEST INDEXING ]
   - This places the page in Google's high-priority live crawl queue immediately.

3. OPTIONAL AUTOMATED PUSH (Google Indexing API):
   - Place your Google Cloud Service Account JSON file as 'service-account.json' in this repo.
   - Add the service account email as an Owner in Search Console.
   - Run: node scripts/gsc-push.mjs --google
======================================================================\n`);
}

// -----------------------------------------------------------------------------
// MAIN EXECUTION FLOW
// -----------------------------------------------------------------------------
async function main() {
  if (runCheck) {
    await auditLiveEndpoints();
  }

  if (runGoogle) {
    await pushToGoogleIndexingApi();
  }

  if (runIndexNow) {
    await pushToIndexNow();
  }

  printGscInstructions();
}

main().catch(err => {
  console.error(`Fatal error: ${err.message}`);
  process.exit(1);
});
