<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

require __DIR__ . '/../vendor/autoload.php';

try {

    $app = require_once __DIR__ . '/../bootstrap/app.php';

    $kernel = $app->make(Kernel::class);

    $request = Request::capture();

    $response = $kernel->handle($request);

    $response->send();

    $kernel->terminate($request, $response);
} catch (Throwable $e) {

    http_response_code(500);

    header('Content-Type: text/plain; charset=UTF-8');

    echo "=== LARAVEL BOOT ERROR ===\n\n";
    echo "Type: " . get_class($e) . "\n\n";
    echo "Message:\n" . $e->getMessage() . "\n\n";
    echo "File:\n" . $e->getFile() . "\n\n";
    echo "Line:\n" . $e->getLine() . "\n\n";
    echo "Trace:\n" . $e->getTraceAsString();
}
