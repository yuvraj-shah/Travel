<?php 
if (session_status() === PHP_SESSION_NONE)
session_start();
unset($_SESSION['user_id']);
header('location:index.php');
?>