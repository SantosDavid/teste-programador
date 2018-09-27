<?php

namespace Models;

use PDO;

abstract class Model
{
    private $connection;

    public function __construct()
    {
        $database = $GLOBALS['env']['database'];

        $this->connection = new PDO(

            'mysql:host=' . $database['local'] .

            ';dbname=' . $database['dbname'] .

            ';charset=' . $database['charset']

            , $database['user'], $database['password']
        );

        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }

    public function find($id)
    {
        $statement = $this->connection->prepare("SELECT * FROM $this->table WHERE id = ?");

        $statement->bindParam(1, $id);

        $statement->execute();

        return $statement;
    }

    public function create($values)
    {
        $values = array_merge($values, ['id' => null]);

        $columns = implode(',', array_keys($values));

        $totalParameters = array_map(function ($element) {
            return '?';
        }, $values);

        $params = implode(',', $totalParameters);

        $statement = $this->connection->prepare("INSERT INTO $this->table($columns) VALUES($params)");

        $i = 1;

        foreach ($totalParameters as $key => $parameter) {
            $statement->bindParam($i++, $values[$key]);
        }

        $statement->execute();
    }

    public function update($id, $values)
    {
        $cols = '';

        foreach ($values as $field => $value) {
            $cols .= $field . "= '$value', ";       
        }

        $cols = substr($cols, 0, strlen($cols) -2);
      
        return $this->connection->query("UPDATE $this->table SET $cols WHERE id = $id");
    }

    public function all()
    {
        return $this->connection->query("SELECT * FROM $this->table");
    }

    public function destroy($id)
    {
        $statement = $this->connection->prepare("DELETE FROM $this->table WHERE id = ?");

        $statement->bindParam(1, $id);

        return $statement->execute();
    }
}
