<?php

namespace Services;

use Helpers\Random;

class HashService
{
    public function hash($string)
    {
        return [
            
            'SHA512' => hash('SHA512', $string),
            
            'HMAC' => hash_hmac('haval256,5', $string, Random::alphaNumeric(rand(30, 100))),
            
            'PASSWORD_HASH' => password_hash($string, PASSWORD_DEFAULT),
        ];
    }
}