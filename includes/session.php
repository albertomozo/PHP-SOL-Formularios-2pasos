<?php session_start(); 
if (!isset($_SESSION['navegador'])) { header("location:caducada.php");exit;}
?>