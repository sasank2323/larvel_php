<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\countryCheck;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
        //$middleware->append(AgeCheck::class);
        $middleware->appendToGroup('web', [countryCheck::class, AgeCheck::class]);
        //http://127.0.0.1:8000/agecheck?country=%22usa%22&age=20 passed the check
        //OUTPUT :country check age check 
        
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
