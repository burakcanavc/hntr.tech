<?php
require_once("../classes/init.php");
if(isset($_FILES['upload']['name']))
{
    $fileName=$_FILES['upload']['name'];
    $extension=pathinfo($fileName,PATHINFO_EXTENSION);
    $newName=rand().'_duyuru_'.time().'.'.$extension;
    $fileTMP=$_FILES['upload']['tmp_name'];
    $filePath=$_SERVER["DOCUMENT_ROOT"].'/PHP/images/duyurular/'.$newName;
    move_uploaded_file($fileTMP,$filePath);
    $function_number=$_GET["CKEditorFuncNum"];
    $url= URL.'/images/duyurular/'.$newName;
    $message='';
    echo "<script> window.parent.CKEDITOR.tools.callFunction('".$function_number."','".$url."','".$message."')</script>";
}

?>