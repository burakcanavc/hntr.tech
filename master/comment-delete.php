<?php
require 'header.php';

/* Veritabanına bağlanma işlemi */

$db=new Database();

/* İşlem sonu */



/* Blog yazı delete işlemi */

$commentId=intval($_GET['id']);

$commentDelete=$db->Delete('DELETE FROM tbl_comments WHERE id=?',array($commentId));

if($commentDelete){

  echo '<meta http-equiv="refresh" content="0;URL=https://hntr.tech/master/comments.php">';

}/* İşlem sonu */

?>