<?php
    //wersja PHP - 7.4.9
    echo PHP_VERSION;
    // echo phpinfo();

    //interpolacja
    echo '<br>a', 'b', 'c'; // show a show b show c
    echo '<br>a'.'b'.'c<Br>'; // add a+b+c show abc

    $pow = 2**10;
    echo $pow;

    //operatory bitowe
    // and &, or |, not ~, xor ^, <<, >>

    $bin = 0b1010;
    echo "<br>$bin<br>";

    $bin = $bin << 2; // 101000
    echo $bin; //40

    $bin = $bin >> 3; //101
    echo "<br>$bin"; //5

    // porównanie
    $x = 1;
    $y = 1.0;

    if ($x == $y){
        echo '$x jest równa $y';
    } else {
        echo '<br>$x nie jest równa $y';
    }

    if ($x === $y){
        echo '<br>$x jest identyczna $y';
    } else {
        echo '<br>$x nie jest identyczna $y<br>';
    }

    echo gettype($x);
    echo "<br>";
    echo gettype($y);
    echo "<br>";

    echo $x <=> $y;
    echo "<hr>";

    $x = 1;
    $x = $x++; 
    echo $x; // 1
    $x =++ $x;
    echo $x; // 2
    $y = $x++;
    echo $x; // 3
    echo $y; // 2
    $y=++$x*2-1;
    echo $x; // 4
    echo $y; // 7

    // operatory rzutowania 
    // bool, int, float, string, array, object, unset

    $test1 = '123abc45';
    $test2 = 0;
    $test3 = 20;

    echo '<br>Typ danych $test1: ', gettype($test1);
    $test1 = (int)$test1;
    echo $test1;
    echo '<br>Typ danych $test1: ', gettype($test1);

    echo '<br>Typ danych $test2: ', gettype($test2);
    $test2 = (bool)$test2;  
    echo $test2;
    echo '<br>Typ danych $test2: ', gettype($test2);

    echo '<br>Typ danych $test3: ', gettype($test3);
    $test3 = (float)$test3;  
    echo $test3;
    echo '<br>Typ danych $test3: ', gettype($test3);

    //rozmiar typu integer
    echo "<BR>",PHP_INT_SIZE,'<hr>'; // 8

    //kontrola typu zmiennych
    // is_int(), is_float(), is_strin(), is_bool(), is_null()
    $x = 1;
    $y = null;
    echo is_int($x);
    echo is_float($x);
    echo '<br>',is_null($y),'<br>';

    $w;
    //operator ignorowania błędów --> @
    echo @gettype($w);

?>