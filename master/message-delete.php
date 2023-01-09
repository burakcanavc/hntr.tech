<?php
require 'header.php';

/* Veritabanına bağlanma işlemi */

$db=new Database();

/* İşlem sonu */



/* Blog yazı delete işlemi */

$messageId=intval($_GET['id']);

$messageDelete=$db->Delete('DELETE FROM tbl_messages WHERE id=?',array($messageId));

if($messageDelete){

  echo '<meta http-equiv="refresh" content="0;URL=https://hntr.tech/master/messages.php">';

}/* İşlem sonu */

?>