<?php

namespace App\Exceptions;

use Exception;

class VoteException extends OneMinutePollException
{

    public function __construct($name, $code = 501, Exception $previous = null)
    {
        parent::__construct($name, $code, $previous);
    }
}
