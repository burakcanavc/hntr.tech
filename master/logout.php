<?php

require '../classes/func.php';

$_SESSION = [];
session_unset();
session_destroy();
header("Location: login.php");

?>