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
        <form method="GET" action="" name="login" enctype="application/x-www-form-urlencoded">
            <p>Logowanie</p>

            <input type="text" placeholder="Login" name="login"><br>
            <input type="text" placeholder="Hasło" name="passwd"><br>
            
            <a href="#">Nie pamiętam hasła</a><br>
            
            <button><a href="./profile.php">Zaloguj</a></button><br><br>
            <a href="./register.php">Nie posiadasz jeszcze konta? Załóż je tutaj!</a><br>
        </form>
    </main>
</body>
</html>