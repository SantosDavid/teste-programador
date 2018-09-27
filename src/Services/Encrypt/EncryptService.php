<?php

namespace Services\Encrypt;

use Services\Encrypt\Algorithm\CifraCesar;
use Services\Encrypt\Algorithm\Aes;
use Services\Encrypt\Algorithm\Rijdael;

class EncryptService
{
    private $cifraCesar;

    private $aes;

    private $rijdael;

    public function __construct()
    {
        $this->cifraCesar = new CifraCesar();

        $this->aes = new Aes();

        $this->rijdael = new Rijdael();
    }

    public function encrypt($string, $key)
    {
        return [

            'CIFRA_CESAR' => $this->cifraCesar->encrypt($string, $key),

            'AES_256' => $this->aes->encrypt($string, $key),

            'RIJDAEL_128' => $this->rijdael->encrypt($string, $key),
        ];
    }

    public function decrypt($string, $key)
    {
        return [

            'CIFRA_CESAR' => $this->cifraCesar->decrypt($string, $key),

            'AES_256' => $this->aes->decrypt($string, $key),

            'RIJDAEL_128' => $this->rijdael->decrypt($string, $key),
        ];
    }
}