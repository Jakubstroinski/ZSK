<!DOCTYPE html>
<html lang="PL-pl">
<head>

    <meta charset="UTF-8">

    <style>

        *{
            padding: 0;
            margin: 0;
        }

        input{
            padding: 7px;
            border: 2px solid coral;
            border-radius: 25px;
        }

        button{
            padding: 5px;
            background-color: lightcoral;
            border: 2px solid coral;
            border-radius: 25px;
        }

        table{
            border: 2px solid black;
            text-align: center;
            margin: 10px 0px;
        }

        td.uno{
            border-right: 2px solid black;
            padding: 10px;
        }

        th{
            border-top: 2px solid black;
            padding: 10px 20px;
        }

    </style>

</head>

<body>

    <div>

        <form method="POST">

            <input type="text" name="imie" placeholder="Imię" maxlength="8">
            <br><br>
            <input type="text" name="nazwisko" placeholder="Nazwisko">
            <br><br>

            <button type="submit">Wyślij</button>
            <br><br>

        </form>

        <form method="POST">
            <input type="number" name="jeden" placeholder="jeden">
            <input type="number" name="dwa" placeholder="dwa">
        </form>

        <?php
        require_once("./stroiński_jakub.php")
        ?>

    </div>

</body>
</html>