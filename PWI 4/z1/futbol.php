<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rozgrywki futbolowe</title>
    <link rel="stylesheet" href="./futbol.css">
</head>
<body>
    <header>
        <h2>Światowe rozgrywki piłkarskie</h2>
        <img src="./obraz1.jpg" alt="boisko">
    </header>
    <section id="mecze">
        <?php 
            $connect = mysqli_connect("localhost", 'root', '', 'egzamin');
            $sql = "SELECT zespol1, zespol2, wynik, data_rozgrywki FROM rozgrywka WHERE zespol1 = 'EVG'";
            $result = mysqli_query($connect, $sql);
            while($wiersz = mysqli_fetch_assoc($result)){
                $zesp1 = $wiersz['zespol1'];
                $zesp2 = $wiersz['zespol2'];
                $wynik = $wiersz['wynik'];
                $data = $wiersz['data_rozgrywki'];
            echo $text = <<<TXT
                <div class="karta">
                    <h3>$zesp1 - $zesp2</h3>
                    <h4>$wynik</h4>
                    <p>$data</p>
                </div>
            TXT;
            }
        ?>
    </section>
    <main>
        <h2>Reprezentacja Polski</h2>
        <section id="lewy">
            <p>Podaj pozycję zawodników</p>
            <form action="#" method="POST">
                <input type="number" name="liczba" value="">
                <button type="button" name="button" id="btn">Sprawdź</button>
            </form>
            <ul>
                <?php 
                $id = $_POST['num'];
                $connect = mysqli_connect("localhost", 'root', '', 'egzamin');
                $sql = "";
                ?>
            </ul>
        </section>
        <section id="prawy">
            <img src="./zad1.png" alt="piłkarz">
            <p>Autor: 00000000000</p>
        </section>
    </main>
</body>
</html>