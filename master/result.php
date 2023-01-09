<?php
session_set_cookie_params(null,'/','hntr.tech',true,true);
session_start();

require '../classes/db.php';

require '../classes/safe.php';

require '../classes/routing.php';

/* Veritabanı tablo çağırma işlemi */
$db=new Database();
$myLogin=$db->getRow("Call sp_Login()");
/* İşlem sonu */

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $dbUsername = "$myLogin->master_user";
    $dbPassword = "$myLogin->master_pass";
    if(empty($username) && empty($password)){
        echo '<div style="background-image: url(../images/Login_bg.jpg); height: 100%; width: 100%;text-align:center;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><div style="color:#fff;font-size: 50px;">Kullanıcı Adı veya Şifre Boş Bırakılamaz !</div></div>';
        comeBack(2);
    }else{
    if(($username != $dbUsername) || ($password != $dbPassword)){
        echo '<div style="background-image: url(../images/Login_bg.jpg); height: 100%; width: 100%;text-align:center;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><div style="color:#fff;font-size: 50px;">Kullanıcı Adı veya Şifre Hatalı !</div></div>';
        comeBack(2);
    }else{
        session_regenerate_id(true);
        $_SESSION["LogedIn"]=true;
        $_SESSION["username"]=$username;
        $_SESSION["LoginIP"]=$_SERVER["REMOTE_ADDR"];
        $_SESSION["userAgent"]=$_SERVER["HTTP_USER_AGENT"];

        go("index.php");
}
}
}else{
    go("login.php");
}


?>