<?php

namespace Helpers;

class Random
{
    const ALPHABET = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    
    public static function alphaNumeric($length)
    {
        $alphabet =  Self::ALPHABET . uniqid();
    
        return substr(str_shuffle($alphabet), 0, $length);
    }
}