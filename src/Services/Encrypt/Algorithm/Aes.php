<?php

namespace Services\Encrypt\Algorithm;

class Aes implements Algorithm
{
    const AES = 'aes-256-cbc';

    public function encrypt($string, $key)
    {
        $ivsize = openssl_cipher_iv_length(Self::AES);
        $iv = openssl_random_pseudo_bytes($ivsize);
        
        $ciphertext = openssl_encrypt(
            $string,
            Self::AES,
            $key,
            OPENSSL_RAW_DATA,
            $iv
        );

        return base64_encode($iv . $ciphertext);
    }

    public function decrypt($string, $key)
    {
        $string = base64_decode($string);

        $ivsize = openssl_cipher_iv_length(Self::AES);
        $iv = mb_substr($string, 0, $ivsize, '8bit');
        $ciphertext = mb_substr($string, $ivsize, null, '8bit');
        
        return openssl_decrypt(
            $ciphertext,
            Self::AES,
            $key,
            OPENSSL_RAW_DATA,
            $iv
        );
    }
}