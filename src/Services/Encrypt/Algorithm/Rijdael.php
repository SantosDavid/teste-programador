<?php

namespace Services\Encrypt\Algorithm;

class Rijdael implements Algorithm
{
    private function getKey($key)
    {
        return mb_substr($key, 0, 32, '8bit');
    }

    public function encrypt($string, $key)
    {
        $key = $this->getKey($key);

        $encrypt =  mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $string, 'ecb');

        return base64_encode($encrypt);
    }

    public function decrypt($string, $key)
    {
        $key = $this->getKey($key);
        
        $string = base64_decode($string);

        $decrypt = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $string, 'ecb');

        return trim($decrypt);
    }
}