<html>

<head>

    <style>

        select{
            width: 35px;
            height: 30px;
            background-color: #f0d07a;
            border-radius: 25%;
            border: 2px solid #084b8a;
        }

        input{
            padding: 5px;
            background-color: #659edb;
            border: 2px solid #084b8a;
            margin: 20px;
        }

        button{
            width: 35px;
            height: 30px;
            background-color: #f0d07a;
            border-radius: 25%;
            border: 2px solid #084b8a;
        }

    </style>

<body>

<form method="POST" action="">

    <input type="number" name="liczba1">

    <select name="znak">

        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
        
    </select>

    <input type="number" name="liczba2">

    <button type="submit">=</button>

    </form>

    <?php
        include './function.php';

        $liczba1 = $_POST['liczba1'];
        $liczba2 = $_POST['liczba2'];
        $znak = $_POST['znak'];
        $wynik = "";
        switch ($znak)
        {
        case "+":
        $wynik = dodaj($liczba1, $liczba2);
        break;
        case "-":
        $wynik = odejmij($liczba1, $liczba2);
        break;
        case "*":
        $wynik = pomnoz($liczba1, $liczba2);
        break;
        case "/":
        $wynik = podziel($liczba1, $liczba2);
        break;
        }
        echo $wynik;
    ?>

</body>
</head>
</html>