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
        $statment = $instance_PDO->prepare($query);
        $statment->execute([$name]);
    }

    public function read()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }


}

?>