<?php

$conn = mysqli_connect("localhost", "root", "", "yourpersonalgym");

if(!$conn){
    die("Nie udało się połączyć z bazą danych: ".mysqli_connect_error());
}