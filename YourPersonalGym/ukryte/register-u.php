<?php 

if(isset($_POST['sub_reg'])){

    $login = $_POST['login_reg'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $passwd = $_POST['passwd_reg'];
    $passwd2 = $_POST['passwd_reg2'];

    require_once 'db-u.php';
    require_once 'functs-u.php';

    if (emptyInputReg($name, $surname, $login, $passwd, $passwd2) !== false){
        header("location: ../register.php?error=emptyinput");
        exit();
    }

    if (invalidLogin($login) !== false){
        header("location: ../register.php?error=invalidlogin");
        exit();
    }

    if (passwdMatch($passwd, $passwd2) !== false){
        header("location: ../register.php?error=passwordsdontmatch");
        exit();
    }

    if (loginExists($login, $conn) !== false){
        header("location: ../register.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $surname, $login, $passwd);

} else {
    header("location: ../register.php");
}