<?php
session_start(); 
unset($_SESSION["login_matric"]);
header("location: index.php");
session_destroy();
?>