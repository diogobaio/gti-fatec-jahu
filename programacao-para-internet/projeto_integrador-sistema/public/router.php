<?php
// Router script for PHP built-in server
// This ensures all requests go through index.php

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// If the request is for a real file (like CSS, JS, images), serve it directly
if ($uri !== '/' && file_exists(__DIR__ . $uri)) {
    return false; // Serve the requested resource as-is
}

// Otherwise, route through index.php
require_once __DIR__ . '/index.php';
