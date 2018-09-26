<?php

namespace Http\Controllers;

use Repositories\FactoryRepository;
use Services\SSHService;
use Helpers\Stream;

class SshController extends BaseController
{
    private $repository;

    public function __construct()
    {
        $this->repository = FactoryRepository::make('device');

        $this->service = new SSHService();
    }

    public function index()
    {
        $devices = $this->repository->all();

        return $this->view('ssh/index', compact('devices'));
    }

    public function connect()
    {
        $device = $this->repository->find($_POST['device_id']);

        $this->service->connect($device->ip, $_POST['user'], $_POST['password']);

        return $this->view('ssh/connected');
    }

    public function command()
    {
        $stream = $this->service->execute($_POST['command']);

        $result = Stream::getContents($stream);

        return $this->view('ssh/connected', compact('result'));
    }
}