<?php

class Database{

/*private $MYSQL_HOST='localhost';
private $MYSQL_USER='root';     
private $MYSQL_PASS='';
private $MYSQL_DB='hntr.tech';
private $CHARSET='UTF8';
private $COLLATION='utf8_general_ci';
private $pdo=NULL;*/

public function __construct (){
    /*$SQL="mysql:host=".$this->MYSQL_HOST.";dbname=".$this->MYSQL_DB;*/
    try{
        global $db;
$db = new PDO("mysql:host=localhost;dbname=hntr.tech;charset=utf8", "root","");
        /*$this->$pdo=new \PDO($SQL,$this->MYSQL_USER,$this->MYSQL_PASS);
        $this->$pdo->exec("SET NAMES '".$this->CHARSET."'COLLATE'".$this->COLLATION."'");
        $this->$pdo->exec("SET CHARACTER SET '".$this->CHARSET."'");
        $this->$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $this->$pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);*/
    }catch(PDOException $e){
        die("OLMADI".$e->getMessage());
    }
}

/*public function __destruct (){
    $this->pdo=NULL;
}*/

}
