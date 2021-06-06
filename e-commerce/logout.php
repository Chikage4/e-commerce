<?php 
include_once 'storeAction.php';

session_destroy();
header('location:login.php');
?>