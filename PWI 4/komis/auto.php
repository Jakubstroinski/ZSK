<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='./auto.css'>
    <title>witrynki</title>
</head>
<body>
    <header>
        <h1>SAMOCHODY</h1>
    </header>

    <main>
        <section class='lewy'>
            <h2>Wykaz samochodów</h2>
            <ul>
                <?php

                $conn = mysqli_connect('localhost', 'root', '', 'komis');
                $zapytanie_1 = 'SELECT id, marka, model from samochody;';
                $wynik_zapytania1 = mysqli_query($conn, $zapytanie_1);

                while($row = mysqli_fetch_assoc($wynik_zapytania1)){
                echo "<li>";
                foreach ($row as $value) {
                    echo $value." ";
                }
                echo "</li>";
                }

                mysqli_close($conn);

                ?>
            </ul>
            <h2>Zamówienia</h2>
            <ul>
                <?php
                
                $conn = mysqli_connect('localhost', 'root', '', 'komis');
                $zapytanie_2 = 'SELECT Samochody_id, Klient FROM zamowienia';
                $wynik_zapytania2 = mysqli_query($conn, $zapytanie_2);

                while($row = mysqli_fetch_assoc($wynik_zapytania2)){
                    echo "<li>";
                    foreach ($row as $value) {
                    echo $value." ";
                    }
                    echo "</li>";
                }

                mysqli_close($conn);

                ?>
            </ul>
        </section>
        <section class='prawy'>
            <h2>Pełne dane: Fiat</h2>
            <?php

                $conn = mysqli_connect('localhost', 'root', '', 'komis');
                $zapytanie_3 = 'SELECT * FROM samochody where marka="Fiat"';
                $wynik_zapytania = mysqli_query($conn, $zapytanie_3);

                while($row = mysqli_fetch_assoc($wynik_zapytania)){
                    foreach ($row as $key => $value) {
                    echo $value."/";
                    }
                    echo "<br>";
                }

                //zamkniecie
                mysqli_close($conn);
            ?>
        </section>
    </main>

    <footer>
        <table>
            <tbody>
                <tr>
                    <td><a href="#">Kwerendy</a></td>
                    <td><p>Autor 01222707016</p></td>
                    <td><img src='./auto.png' alt='komis samochodowy'/></td>
                </tr>
            </tbody>
        </table>
    </footer>
</body>
</html>