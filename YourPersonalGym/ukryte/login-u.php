<?php

if(isset($_POST["sub_login"])){
    $login = $_POST["login_login"];
    $pass = $_POPST["passwd_login"];

    require_once 'db-u.php';
    require_once 'functs-u.php';

    if (emptyInputLog($login, $pass) !== false){
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $login, $pass);
} else {
    header("location: ../login.php");
    exit();
}