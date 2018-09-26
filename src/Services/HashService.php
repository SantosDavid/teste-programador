<?php

namespace Services;

class HashService
{
    const ALPHABET = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

    public function hash($string)
    {
        return [
            
            'SHA512' => hash('SHA512', $string),
            
            'HMAC' => hash_hmac('ripemd160', $string, $this->random(rand(30, 100))),
            
            'CRYPT' => crypt($string, $this->random(rand(30, 100))),
        ];
    }

    private function random($length)
    {
        $alphabet =  Self::ALPHABET . uniqid();

        return substr(str_shuffle($alphabet), 0, $length);
    }
}