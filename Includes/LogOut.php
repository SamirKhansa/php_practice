<?php
session_start();


$_SESSION = array();


session_destroy();

header("Location: ../Assigment1/index.html");
exit();
?>
