<?php
require 'header.php';

/* Veritabanına bağlanma işlemi */

$db=new Database();

/* İşlem sonu */



/* Blog yazı delete işlemi */

$blogId=intval($_GET['id']);

$blogDelete=$db->Delete('DELETE FROM tbl_blog WHERE id=?',array($blogId));

if($blogDelete){

  echo '<meta http-equiv="refresh" content="0;URL=https://hntr.tech/master/blogs.php">';

}/* İşlem sonu */
?>