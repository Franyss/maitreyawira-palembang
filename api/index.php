<?php

// 1. Buat folder sementara di /tmp (satu-satunya lokasi yang bisa ditulis di Vercel)
$directories = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
    '/tmp/bootstrap/cache',
];

foreach ($directories as $dir) {
    if (!file_exists($dir)) {
        mkdir($dir, 0755, true);
    }
}

// 2. Timpa direktori cache Laravel ke /tmp
$_ENV['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';
$_ENV['APP_SERVICES_CACHE']  = '/tmp/bootstrap/cache/services.php';
$_ENV['APP_PACKAGES_CACHE']  = '/tmp/bootstrap/cache/packages.php';
$_ENV['APP_CONFIG_CACHE']    = '/tmp/bootstrap/cache/config.php';
$_ENV['APP_ROUTES_CACHE']    = '/tmp/bootstrap/cache/routes-v7.php';

// 3. Jalankan aplikasi Laravel
require __DIR__ . '/../public/index.php';
