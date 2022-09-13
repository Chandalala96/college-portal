<?php 

namespace app\admin_classes;

abstract class Db_connect {

    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbName = "college_portal";


    protected function connect() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $db = new \PDO($dsn, $this->user, $this->pwd);
        $db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        return $db;
    }
}