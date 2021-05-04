<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>YourPersonalGym</title>

    <link href="./fonts/fontello/css/fontello.css" rel="stylesheet">
    <link href="./styles/login.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    
    <a href="./index.php" class="side_logo">
        <img class="side_logo" src="./graphics/Logo-Kuznia.png">
    </a>

    <main>
        <form method="post" action="./ukryte/login-u.php" name="login" enctype="application/x-www-form-urlencoded">
            <p>Logowanie</p>

            <input type="text" placeholder="Login" name="login_login"><br>
            <input type="password" placeholder="Hasło" name="passwd_login"><br>
            
            <a href="#">Nie pamiętam hasła</a><br>
            
            <button type="submit" value="Submit" name="sub_login"><a href="./profile.php">Zaloguj</a></button><br><br>
            <a href="./register.php">Nie posiadasz jeszcze konta? Załóż je tutaj!</a><br>
        </form>

        <?php 
        if (isset($_GET["error"])){
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields</p>";
            }
            if ($_GET["error"] == "wronglogin") {
                echo "<p>Try again!</p>";
            }
            if ($_GET["error"] == "invalidlogin") {
                echo "<p>No specials allowed!</p>";
            }
            if ($_GET["error"] == "passwordsdontmatch") {
                echo "<p>Passwords don't match!</p>";
            }
            if ($_GET["error"] == "usernametaken") {
                echo "<p>Username is already taken :(</p>";
            }
            else {
                echo "<p>U have signed up!</p>";
            }
        }
        ?>

    </main>

</body>
</html>