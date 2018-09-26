<?php

namespace Services;

class SSHService
{
    private $sessionService;

    private $connection;

    const KEY = 'service_ssh';

    public function __construct()
    {
        $this->sessionService = new SessionService();
    }

    public function connect($ip, $user, $password)
    {
        if (!$this->connection = ssh2_connect($ip, 22)) {
            throw new \Exception('Erro ao conectar no servidor!');
        }

        if (!ssh2_auth_password($this->connection, $user, $password)) {
            throw new \Exception('Usuário ou senha incorretos');
        }

        $this->sessionService->set(Self::KEY, ['ip' => $ip, 'user' => $user, 'password' => $password]);

        return true;
    }

    public function execute($command)
    {
        $informatons = $this->sessionService->get(Self::KEY);

        $this->connect($informatons['ip'], $informatons['user'], $informatons['password']);

        return ssh2_exec($this->connection, $command);
    }
}