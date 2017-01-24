<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace testesAutomatizados\pdo;

use PDO;
use PDOException;

/**
 * Description of sqliteConn
 *
 * @author alex.bertolla
 */
class ConnectionSqlite {
    private static $conn;

    private function __construct() {
        
    }

    private static final function conect() {
        try {
            self::$conn =  new PDO('sqlite:database.db');
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    
    public static function listaDados() {
        self::conect();
        $sql = 'SELECT * FROM categoria;';
        $stm = self::$conn->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }

}
