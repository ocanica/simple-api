<?php

class Connection {
    public static function make($config) {
        try {
            return new PDO(
                $config['dbconnection_str'].';dbname='.
                $config['dbname'],
                $config['dbusername'],
                $config['dbpassword'],
                $config['dboptions']
            );
        } catch (PDOException $e) {
            die('Something went wrong: '.$e->getMessage());
        }
    }
}