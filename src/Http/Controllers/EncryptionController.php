<?php

namespace Http\Controllers;

use Services\Encrypt\EncryptService;

class EncryptionController extends BaseController
{
    private $service;

    public function __construct()
    {
        $this->service = new EncryptService();
    }

    public function index()
    {
        return $this->view('encryption/index');
    }

    public function encrypt()
    {
        if ($_POST['action'] === 'encrypt') {
            
            $data = $this->service->encrypt($_POST['string'], $_POST['key']);
        
            return $this->view('encryption/index', compact('data'));
        }
        
        $data = $this->service->decrypt($_POST['string'], $_POST['key']);
        
        return $this->view('encryption/index', compact('data'));
    }

    public function decryption()
    {
        var_dump($this->service->decrypt($_POST['CIFRA_CESAR'], $_POST['AES_256']));
    }
}