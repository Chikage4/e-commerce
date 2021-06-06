<?php
require_once 'stroeAction.php';
$userid = $_GET['user_id'];

$user->delete_user($userid);



?>