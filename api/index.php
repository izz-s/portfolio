<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

require __DIR__ . '/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Prepare writable directories for Vercel
|--------------------------------------------------------------------------
*/

$storagePath = '/tmp/storage';
$bootstrapCachePath = '/tmp/bootstrap/cache';

$directories = [
    $storagePath,
    $storagePath . '/app',
    $storagePath . '/framework',
    $storagePath . '/framework/cache',
    $storagePath . '/framework/cache/data',
    $storagePath . '/framework/sessions',
    $storagePath . '/framework/views',
    $storagePath . '/logs',
    $bootstrapCachePath,
];

foreach ($directories as $directory) {
    if (!is_dir($directory)) {
        mkdir($directory, 0777, true);
    }
}

/*
|--------------------------------------------------------------------------
| Tell Laravel to use writable bootstrap cache
|--------------------------------------------------------------------------
*/

putenv('APP_SERVICES_CACHE=' . $bootstrapCachePath . '/services.php');
putenv('APP_PACKAGES_CACHE=' . $bootstrapCachePath . '/packages.php');
putenv('APP_CONFIG_CACHE=' . $bootstrapCachePath . '/config.php');
putenv('APP_ROUTES_CACHE=' . $bootstrapCachePath . '/routes-v7.php');
putenv('APP_EVENTS_CACHE=' . $bootstrapCachePath . '/events.php');

/*
|--------------------------------------------------------------------------
| Bootstrap Laravel
|--------------------------------------------------------------------------
*/

$app = require_once __DIR__ . '/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Tell Laravel to use writable storage
|--------------------------------------------------------------------------
*/

$app->useStoragePath($storagePath);

/*
|--------------------------------------------------------------------------
| Handle Request
|--------------------------------------------------------------------------
*/

$kernel = $app->make(Kernel::class);

$request = Request::capture();

$response = $kernel->handle($request);

$response->send();

$kernel->terminate($request, $response);
