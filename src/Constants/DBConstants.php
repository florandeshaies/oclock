<?php

namespace Constants;

class DBConstants
{
    
    const GAME_DURATION = 5;

    function showGameDuration() {
        echo  self::GAME_DURATION. "\n";
    }

    const DSN = "mysql:dbname=memory;host=127.0.0.1";
    
    function showDSN() {
        echo  self::DSN. "\n";
    }

    const DB_USER = "root";

    function showDBUser() {
        echo  self::DB_USER. "\n";
    }

    const DB_PASS = "";

    function showDBPass() {
        echo  self::DB_PASS. "\n";
    }
    
}
?>