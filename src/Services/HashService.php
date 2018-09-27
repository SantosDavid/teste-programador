<?php

namespace Services;

class HashService
{
    public function hash($string)
    {
        return [
            
            'SHA512' => hash('SHA512', $string),
            
            'HMAC' => hash_hmac('haval256,5', $string, random_bytes(rand(30, 100))),
            
            'BCRYPT' => password_hash($string, PASSWORD_BCRYPT),
        ];
    }
}