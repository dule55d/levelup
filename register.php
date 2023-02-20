<?php
include 'includes/autoloader.inc.php';
Session::sessionStart();

// check if user is not logged
Session::userLogged();

$user_obj = new User();

$user_obj->defineRegistrationForm();
echo $user_obj->form;

if(isset($_POST['register'])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user_obj->setUser($full_name, $email, $username, $password);
}