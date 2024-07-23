<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->validateCsrfTokens(except:[
            'http://models_espaldon.test/students',
            'http://models_espaldon.test/students/31',
            'http://models_espaldon.test/students/32'

        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
