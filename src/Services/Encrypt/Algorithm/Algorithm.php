<?php

namespace Services\Encrypt\Algorithm;

interface Algorithm
{
    public function encrypt($string, $key);
    
    public function decrypt($string, $key);
}