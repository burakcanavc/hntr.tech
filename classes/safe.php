<?php
function security($text){
    $text=trim($_POST[$text]);
    $text=stripcslashes($text);
    $text=htmlspecialchars($text);
    return $text;
}
?>