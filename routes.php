<?php
use App\Router;
use App\Controllers\PublicController;

Router::get('/', [PublicController::class, 'index']);

Router::get('/about', [PublicController::class, 'about']);

Router::get('/form', [PublicController::class, 'form']);

Router::post('/form', [PublicController::class, 'formPost']);