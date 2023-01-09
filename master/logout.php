<?php

session_start();

require '../classes/routing.php';

session_unset();
session_destroy();
go("login.php");

?>