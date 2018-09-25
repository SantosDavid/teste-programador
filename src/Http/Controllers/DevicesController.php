<?php

namespace Http\Controllers;

use Repositories\FactoryRepository;

class DevicesController extends BaseController
{
    private $repository;

    public function __construct()
    {
        $this->repository = FactoryRepository::make('device');
    }

    public function index()
    {
        $devices = $this->repository->all();

        return $this->view('devices/index', compact('devices'));
    }

    public function create()
    {
        return $this->view('devices/create');
    }

    public function store()
    {
       $this->repository->create($_POST);

       return $this->redirectTo('/devices');
    }

    public function edit()
    {
        $device = $this->repository->find($_GET['id']);

        return $this->view('devices/edit', compact('device'));
    }

    public function update()
    {
        $this->repository->update($_GET['id'], $_POST);

        return $this->redirectTo('/devices');
    }

    public function destroy()
    {
        $this->repository->destroy($_GET['id']);

        return $this->redirectTo('/devices');
    }
}
