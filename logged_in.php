<?php
include 'includes/autoloader.inc.php';
Session::sessionStart();
Session::userNotLogged();

$user_obj = new User();
$user_obj->showUsers();

Session::logout();
?>