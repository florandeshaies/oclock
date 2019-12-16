<?php

namespace Models;

use DAO\UserDAO;

class User
{
    
    /**
    * user id
    */
    private $id;
    
    /**
    * user name
    */
    private $name;
    
    /**
    * user DAO
    */
    private $user_DAO;
    

    /**
    * get user id
    */
    public function getId()
    {
        return $this->id;
    }

    /**
    * get user name
    */
    public function getName()
    {
        return $this->name;
    }

    /**
    * set user name
    */
    public function setName($name)
    {
        $this->user_DAO = new UserDAO();
        $this->user_DAO->create($name);
        $this->name = $name;
    }

}

?>