<?php



/* ↓ sınıfın bağlangıcı ↓ */

class Database{



/* ↓ değişkenler ↓ */

private $MYSQL_HOST='localhost';
private $MYSQL_USER='root';     
private $MYSQL_PASS='';
private $MYSQL_DB='hntr.tech';
private $CHARSET='UTF8MB4';
private $COLLATION='utf8mb4_general_ci';
private $pdo=null;
private $stmt=null;

/* ↑ değişkenlerin sonu ↑ */



/* ↓ bağlantı fonksiyonu ↓ */

public function connect(){

    

   $SQL="mysql:host=".$this->MYSQL_HOST.";dbname=".$this->MYSQL_DB;

   

   try{

        $this->pdo=new PDO($SQL,$this->MYSQL_USER,$this->MYSQL_PASS);



        $this->pdo->exec("SET NAMES '".$this->CHARSET."'COLLATE'".$this->COLLATION."'");



        $this->pdo->exec("SET CHARACTER SET '".$this->CHARSET."'");



        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        

        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        
        

        




    }catch(PDOException $e){



        die("OLMADI".$e->getMessage());

    }

}/* ↑ fonksiyonun sonu ↑ */



/* ↓ bağlantıyı başlatan construct fonksiyonu ↓ */

public function __construct (){ 



    $this->connect();

}/* ↑ fonksiyonun sonu ↑ */



/* ↓ yazım tekrarlarını önlemek için oluşturulmuş veritabanı fonksiyonu ↓ */

private function myQuery($query,$params=null){

    

        if(is_null($params)){

    

            $this->stmt=$this->pdo->query($query);

    

        }else{

    

            $this->stmt=$this->pdo->prepare($query);

            $this->stmt->execute($params);  

        }

    

    return $this->stmt;

    }/* ↑ fonksiyonun sonu ↑ */



/* ↓ tek satır ve tek sütun veri sorgulama fonksiyonu ↓ */

public function getColumn($query,$params=null){



    try{

    

        return $this->myQuery($query,$params)->fetchColumn();



    }catch(PDOException $e){

    

        die($e->getMessage());

    }

    }/* ↑ fonksiyonun sonu ↑ */



/* ↓ tek satır veri sorgulama fonksiyonu ↓ */

public function getRow($query,$params=null){



    try{

    

        return $this->myQuery($query,$params)->fetch();

    

    }catch(PDOException $e){

    

        die($e->getMessage());

    }

    }/* ↑ fonksiyonun sonu ↑ */



/* ↓ çok satır veri sorgulama fonksiyonu ↓ */

public function getRows($query,$params=null){



try{



    return $this->myQuery($query,$params)->fetchAll();



}catch(PDOException $e){



    die($e->getMessage());

}

}/* ↑ fonksiyonun sonu ↑ */



/* ↓ veri ekleme fonksiyonu ↓ */

public function Insert($query,$params=null){



    try{

    

        $this->myQuery($query,$params);

        return $this->pdo->lastInsertId();



    }catch(PDOException $e){

    

        die($e->getMessage());

    }

    }/* ↑ fonksiyonun sonu ↑ */



    /* ↓ veri güncelleme fonksiyonu ↓ */

public function Update($query,$params=null){



    try{

    

        return $this->myQuery($query,$params)->rowCount();



    }catch(PDOException $e){

    

        die($e->getMessage());

    }

    }/* ↑ fonksiyonun sonu ↑ */



    /* ↓ veri silme fonksiyonu ↓ */

public function Delete($query,$params=null){



        return $this->update($query,$params);



    }/* ↑ fonksiyonun sonu ↑ */


    /* ↓ Tablo işlemleri için fonksiyon ↓ */

public function TableOperations($query,$myFetch){

$myTable=$this->pdo->query($query,$myFetch);

    return $myTable;



}/* ↑ fonksiyonun sonu ↑ */



/* ↓ bağlantıyı bitiren fonksiyon ↓ */

public function __destruct (){



    $this->pdo=NULL;

}/* ↑ fonksiyonun sonu ↑ */



}/* ↑ sınıfın sonu ↑ */

?>