<?php

namespace Exceptions;

class BaseException extends \Exception
{
    public function __construct($mensagem, $code = 400)
    {
        parent::__construct($mensagem, $code);
    }
}