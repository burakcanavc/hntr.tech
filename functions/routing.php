<?php

function yonlendir($url , $sure=0){
    echo '<meta http-equiv="refresh" content="'.$sure.';URL='.$url.'">';
   }

function go($url,$time=0){
if($time != 0){
    header("Refresh:$time;url=$url");
}else{
    header("Location:$url");
}
}

function comeBack($time=0){
    
    $url=$_SERVER["HTTP_REFERER"];
    
    if($time != 0){
        header("Refresh:$time;url=$url");
    }else{
        header("Location:$url");
    }
    }















?>