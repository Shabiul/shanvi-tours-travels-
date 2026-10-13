<?php
/**
 * Shanvi Tours & Travels - Vercel Serverless Function Router
 * Consolidates all PHP routes into a single Serverless Function to comply with
 * Vercel Hobby plan's 12-function limit (exceeded_serverless_functions_per_deployment).
 */

// Set working directory to project root so relative includes work seamlessly
chdir(dirname(__DIR__));

$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
$path = parse_url($request_uri, PHP_URL_PATH);
$clean_path = trim($path, '/');

// Route root / home
if ($clean_path === '' || $clean_path === 'index' || $clean_path === 'index.php') {
    require dirname(__DIR__) . '/index.php';
    exit;
}

// Check with .php extension or exact match
$target_file = null;
if (file_exists(dirname(__DIR__) . '/' . $clean_path . '.php')) {
    $target_file = dirname(__DIR__) . '/' . $clean_path . '.php';
} elseif (file_exists(dirname(__DIR__) . '/' . $clean_path)) {
    $target_file = dirname(__DIR__) . '/' . $clean_path;
}

if ($target_file && is_file($target_file)) {
    // Only allow serving .php files through this router
    if (substr($target_file, -4) === '.php') {
        require $target_file;
        exit;
    }
}

// 404 Fallback
http_response_code(404);
if (file_exists(dirname(__DIR__) . '/404.php')) {
    require dirname(__DIR__) . '/404.php';
} else {
    echo "<h1>404 Not Found</h1>";
}
exit;
