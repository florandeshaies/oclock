<?php

namespace Models;

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
        $this->name = $name;
    }

}

?>