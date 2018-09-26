<?php

namespace Services;

class EncryptService
{
    const AES = 'aes-256-cbc';

    public function encrypt($string, $key)
    {
        return [

            'CIFRA_CESAR' => str_rot13($string),

            'AES_256' => $this->aes256Encrypt($string, $key),

            'RIJDAEL_128' => base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $string, 'ecb')),
        ];
    }

    public function decrypt($string, $key)
    {
        return [

            'CIFRA_CESAR' => str_rot13($string),

            'AES_256' => $this->aes256Decrypt($string, $key),

            'RIJDAEL_128' => trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, base64_decode($string), 'ecb')),
        ];
    }

    private function aes256Encrypt($string, $key)
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

    private function aes256Decrypt($string, $key)
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