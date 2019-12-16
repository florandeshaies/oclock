<?php

namespace DAO;

//use Utils\Connection;
use Utils\MySql;

class GameDAO
{
    private $user;
    private $instance_PDO;

    public function __construct()
    {
        $instance_PDO = Connection::getInstance();
    }

    public function create($user_id, $duration, $win, $date)
    {
        $query = "INSERT INTO game(user_id,duration,win,date) VALUES(?,?,?,?)";
        $statment = $this->instance_PDO->prepare($query);
        return $statment->execute([$user_id, $duration, $win, $date]);
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