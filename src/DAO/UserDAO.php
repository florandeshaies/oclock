<?php

namespace DAO;

use Utils\Connection;

class UserDAO
{

    private $user;
    private $instance_PDO;

    public function __construct()
    {
        $instance_PDO = Connection::getInstance();
    }

    public function create($name)
    {
        $query = "INSERT INTO user(name) VALUES(?)";
        $statment = $this->instance_PDO->prepare($query);
        return $statment->execute([$name]);
    }

    public function readById($id)
    {
        $query = "SELECT name FROM user WHERE id=?";
        $statment = $this->instance_PDO->prepare($query);
        return $statment->execute([$id]);
    }

    public function readByName($name)
    {
        $query = "SELECT id FROM user WHERE name=?";
        $statment = $this->instance_PDO->prepare($query);
        return $statment->execute([$name]);
    }

    public function update()
    {

    }

    public function delete()
    {

    }


}
