<?php 

session_start();

unset($_SESSION['name']);
unset($_SESSION['uid']);
header("location:index.php");

 ?>