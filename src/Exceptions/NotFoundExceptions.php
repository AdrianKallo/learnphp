<?php

namespace App\Exceptions;

use Exception;

class NotFoundExceptions extends Exception {
    protected $message = '404 Not found';
    protected $code = 404;
}