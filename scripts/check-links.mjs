import fs from 'node:fs';
import path from 'node:path';

const files = fs.readdirSync('.').filter(f => f.endsWith('.php'));
const links = new Set();

for (const f of files) {
  const content = fs.readFileSync(f, 'utf8');
  // Strip PHP blocks first
  const cleanContent = content.replace(/<\?php[\s\S]*?\?>/g, '');
  const matches = [...cleanContent.matchAll(/href=["']([^"'#]+)(?:#[^"']*)?["']/g)];
  for (const m of matches) {
    const target = m[1].trim();
    if (!target.startsWith('http') && !target.startsWith('tel:') && !target.startsWith('mailto:') && !target.startsWith('javascript:')) {
      links.add(target);
    }
  }
}

console.log('Auditing static internal links in markup:');
let brokenCount = 0;
for (const l of [...links].sort()) {
  const clean = l.split('?')[0];
  const exists = fs.existsSync(clean);
  console.log(`  ${clean}: ${exists ? '\x1b[32mOK\x1b[0m' : '\x1b[31mMISSING\x1b[0m'}`);
  if (!exists) brokenCount++;
}

console.log(`\nTotal unique internal links checked: ${links.size}, Broken: ${brokenCount}`);
