<?php
include 'includes/autoloader.inc.php';
// session_start();
Session::sessionStart();

// check
Session::userLogged();

$user_obj = new User();
$user_obj->defineLoginForm();
echo $user_obj->loginForm;

if(isset($_POST['login'])) {
    $login_cred = [
        'email' => $_POST['email'],
        'password' => $_POST['password'],
    ];

    $user_obj->loginUser($login_cred);
}

?>