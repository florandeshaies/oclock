<?php

namespace Models;

class Game
{

    /**
    * game id
    */
    private $id;
    
    /**
    * reference to user id
    */
    private $user_id;
    
    /**
    * game duration
    */
    private $duration;
    
    /**
    * game win
    */
    private $win;
    
    /**
    * game date
    */
    private $date;
    

    /**
    * get game id
    */
    public function getId()
    {
        return $this->id;
    }

    /**
    * get game user_id
    */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
    * set game user_id
    */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
    * get game duration
    */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
    * set game duration
    */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
    * get game win
    */
    public function getWin()
    {
        return $this->win;
    }

    /**
    * set game win
    */
    public function setWin($win)
    {
        $this->win = $win;
    }

    /**
    * get game date
    */
    public function getDate()
    {
        return $this->date;
    }

    /**
    * set game date
    */
    public function setDate($date)
    {
        $this->date = $date;
    }

}

?>