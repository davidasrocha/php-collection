<?php

namespace PHPCollection\Exceptions;

use Exception;


class TypeException extends Exception
{

    private $messageTemplate = "Type isn't permited";

    public function __construct($message = '', $code = 500, $previous = null)
    {
        if (empty(trim($message))) {
            $message = $this->messageTemplate;
        }
        parent::__construct($message, $code, $previous);
    }

}