<?php

namespace App\Exceptions;

class TestException extends \Exception
{
    public function __construct($message, $code = 0, Exception $previous = null){
        // código

        

        // garante que tudo está corretamente iniciado
        parent::__construct($message, $code, $previous);
    }

    public function __toString(): string
    {
        return __CLASS__ . ": [{$this->code}:{$this->message}\n";
    }
}