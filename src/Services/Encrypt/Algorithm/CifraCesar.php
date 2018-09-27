<?php

namespace Services\Encrypt\Algorithm;

class CifraCesar implements Algorithm
{
    public function encrypt($string, $key)
    {
        return str_rot13($string);
    }

    public function decrypt($string, $key)
    {
        return str_rot13($string);
    }
}