<?php

namespace Http\Controllers;

use Services\HashService;

class HashController extends BaseController
{
    private $service;

    public function __construct()
    {
        $this->service = new HashService();
    }

    public function index()
    {
        return $this->view('hash/index');
    }

    public function hash()
    {
        $hashes = $this->service->hash($_POST['text']);

        $hashes2 = [];
        
        if (array_key_exists('text2', $_POST) && $_POST['text2'] !== '') {
            $hashes2 = $this->service->hash($_POST['text2']);
        }

        return $this->view('hash/index', compact('hashes', 'hashes2'));
    }
}