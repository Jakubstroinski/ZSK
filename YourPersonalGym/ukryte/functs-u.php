<?php 
$result;


function emptyInputReg($name, $surname, $login, $passwd, $passwd2){
    // $result;
    if(empty($name) || empty($surname) || empty($login) || empty($passwd) || empty($passwd2)){
        $result = true;
    } else {
        $result = false;
        echo 'git';
    }
    return $result;
}

function invalidLogin($login){
    // $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $login)){
        $result = true;
    } else {
        $result = false;
        echo 'git3';
    }
    return $result;
}

function passwdMatch($passwd, $passwd2){
    // $result;
    if ($passwd !== $passwd2){
        $result = true;
    } else {
        $result = false;
        echo 'git2';
    }
    return $result;
}

function loginExists($login, $conn){
    $sql = "SELECT * FROM users WHERE login = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=stmtfailed");
        exit();   
    }

    mysqli_stmt_bind_param($stmt, "ss", $login);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $surname, $login, $passwd){

    $sql = "INSERT INTO users (`login`, `name`, `surname`, `password`) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=stmtfailed");
        exit();   
    }

    $hashPass = password_hash($passwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $login, $name, $surname, $hashPass);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../register.php?error=none");
    exit();

}

function emptyInputLog($login, $pass){
    // $result;
    if(empty($login) || empty($pass)){
        $result = true;
    } else {
        $result = false;
        echo 'git';
    }
    return $result;
}

function loginUser($conn, $login, $pass){
    $loginExists = loginExists($login, $conn);

    if($loginExists === false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $passHashed = $loginExists["password"];
    $checkPass = password_verify($passHashed, $pass);

    if ($checkPass === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    } else if ($checkPass === true){
        session_start();
        $_SESSION['userID'] = $loginExists["userID"];
        $_SESSION['login'] = $loginExists["login"];
        header("location: ../index.php");
        exit();
    }
}