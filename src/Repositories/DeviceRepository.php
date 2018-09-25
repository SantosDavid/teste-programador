<?php

namespace Repositories;

use Exceptions\BaseException;
use Models\FactoryModel;

class DeviceRepository
{
    const REQUIRED = [
        'hostname' => '',
        'ip' => '',
        'tipo' => '',
        'fabricante' => '',
    ];

    public function find($id)
    {
        $result = FactoryModel::make('device')->find($id);

        return $result->fetchObject();
    }

    public function create($fields)
    {
        if (!!array_diff_key(Self::REQUIRED, $fields)) {
            throw new BaseException('Campos obrigatórios não foram preenchidos');
        }

        return FactoryModel::make('device')->create($fields);
    }
   
    public function update($id, $fields)
    {
        if (!!array_diff_key(Self::REQUIRED, $fields)) {
            throw new BaseException('Campos obrigatórios não foram preenchidos');
        }

        return FactoryModel::make('device')->update($id, $fields);
    }

    public function all()
    {
        $result = FactoryModel::make('device')->all();
        
        $devices = [];

        while($row = $result->fetch(\PDO::FETCH_OBJ)) {
            $devices[] = $row;
        }

        return $devices;
    }

    public function destroy($id)
    {
        return FactoryModel::make('device')->destroy($id);
    }
}
