<?php

namespace App\Exceptions;

use Exception;

class OneMinutePollException extends Exception
{

    public function __construct($name, $code = 0, Exception $previous = null)
    {
        parent::__construct($name, $code, $previous);
    }
}
