<?php
use App\Router;
use App\Controllers\PublicController;

Router::addRoute('/', [PublicController::class, 'index']);

Router::addRoute('/about', [PublicController::class, 'about']);

Router::addRoute('/form', [PublicController::class, 'form']);