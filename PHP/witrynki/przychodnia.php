<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='./przychodnia.css' rel='stylesheet'>
    <title>Przychodnia</title>
</head>
<body>
    <header><h1>PRAKTYKA LEKARZA RODZINNEGO</h1></header>
    <main>
        <article>
            <h3>Lista pacjentów</h3>
            <br><br>

            <form action='' method='' name='form'>
                <input name='id_pacjenta' type='number' id=''><button>Pokaż</button>
            </form>

            <h3>Lekarze</h3>
            <ol>
                <li>pn-śr
                <ol>
                    <li>Anna Kwiatkowska</li>
                    <li>Jan Kowalewski</li>
                </ol>
                </li>
                <li>czw-pt
                    <ol>
                        <li>Krzysztof Nowak</li>
                    </ol>
                </li>
            </ol>

        </article>

        <article>
            <h2>INFORMACJE SZCZEGÓŁOWE O PACJENCIE</h2>
            <?php 
                $conn = mysqli_connect('localhost','root','','przychodnia');
                $id = $_POST['id_pacjenta'];
                $sql = 'SELECT imie, nazwisko, choroby_przewlekle FROM pacjenci where id = $id ';
                $wynik = mysql_query($conn, $sql)
                while($wiersz = mysqli_fetch_assoc($wynik)){
                    echo '<p>Imię i nazwisko: '.$wiersz['imie'].' '.$wiersz['nazwisko'].'</p>';
                    echo '<p>Choroby przewlekłe : '.$wiersz['choroby_przewlekle'].'</p>';
                    echo '<p>Uczulenia: '.$wiersz['uczulenia'].'</p>';
                }
                mysqli_close($conn);
            ?>
        </article>

    </main>

    <footer>
        <p>utworzone przez: 0000000000</p>
        <a>pobierz plik z kwerendami</a>
    </footer>

</body>
</html>