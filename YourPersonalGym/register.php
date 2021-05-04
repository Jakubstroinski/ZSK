<!DOCTYPE html>
<html lang="pl-PL">

    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>YourPersonalGym</title>
        
        <link href="./fonts/fontello/css/fontello.css" rel="stylesheet">
        <link href="./styles/register.css" rel="stylesheet">
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


        <form method="POST" action="./ukryte/register-u.php" id="regForm" name="register" enctype="application/x-www-form-urlencoded">
            <p>Rejestracja</p>

            <input type="text" placeholder="Login" name="login_reg">
            <input type="text" placeholder="Imię" name="name">
            <input type="text" placeholder="Nazwisko" name="surname">
            <input type="password" placeholder="Hasło" name="passwd_reg">
            <!-- <input type="password" placeholder="Powtórz hasło" name="passwd_reg2"> -->
            
            <Br>

            <button id="regBut" name="sub_reg">Zarejestruj</button><br>
            <a href="./login.php">Logowanie >></a><br>
        </form>
    </main>
    <!-- <script src="./register.js"></script> -->

    <?php 
        if (isset($_GET["error"])){
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields</p>";
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

</body>
</html>