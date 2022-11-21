<?php

require "db.php";



/* ↓ sınıfın bağlangıcı ↓ */
class Login extends Database{

/* ↓ değişkenler ↓ */
public $id;
/* ↑ değişkenlerin sonu ↑ */

/* ↓ login fonksiyonu ↓ */
public function login($username, $password){

$loginQuery = parent::getRow("Call sp_Login()");

if($loginQuery != null){

    if($password == $loginQuery->master_pass){

    $this->id = $loginQuery->id;
        
    return 1; /*giriş başarılı */
 
}else{

    return 10; /*şifre yanlış */
}

}else{

   die("Veritabanında böyle bir kayıt bulunamadı!");
}
}/* ↑ fonksiyonun sonu ↑ */

/* ↓ kullanıcı id fonksiyonu ↓ */
public function idUser(){

return $this->id;

}/* ↑ fonksiyonun sonu ↑ */

}/* ↑ sınıfın sonu ↑ */

?>