<?php

namespace Utils;

use Constants\DBConstants;
use PDO;
use PDOException;

class Connection
{
    
    private static $instance;

    private function __construct($dsn, $user, $password)
    {
        try {
            self::$instance = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            error_log('Connection failed: '. $e->getMessage());
        }
    }

    public static function getInstance()
    {
        $dsn = DBConstants::DSN;
        $user = DBConstants::DB_USER;
        $password = DBConstants::DB_PASS;
        if (is_null(self::$instance)) {
            self::$instance = self::__construct($dsn, $user, $password);
        }
        return self::$instance;
    }

}
?>