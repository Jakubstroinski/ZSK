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
?>