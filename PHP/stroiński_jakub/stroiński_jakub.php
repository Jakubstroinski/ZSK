<?php
require_once("./function.php");

$miesiace = ["styczeń", "luty", "marzec", "kwiecień", "maj", "czerwiec", "lipiec", "sierpień", "wrzesień", "październik", "listopad", "grudzień"];
$dni = ["niedziela","poniedziałek", "wtorek", "środa", "czwartek", "piątek", "sobota"];
$czas = date("H:i:s");
$data = "godzina: ".$czas." | ".date("d")." ".$miesiace[date("m")-1]." ".date("Y")." | ".$dni[date("w")];
$dzientyg = $dni[date("w")];
$wynik="";
$txt_imie="";

if(!empty($_POST["jeden"]) & !empty($_POST["dwa"])){
    $wynik = oblicz($_POST["jeden"], $_POST["dwa"]);
}

if(!empty($_POST["imie"]) & !empty($_POST["nazwisko"])){
    $imie = ucfirst(strtolower(trim($_POST["imie"])));
    $nazwisko = ucfirst(strtolower(trim($_POST["nazwisko"])));

    $txt_imie = $nazwisko."_".$imie."_gr_4";
}


            
$table=<<<TABLE
<br>
{$txt_imie}
<br>
<table>
    <tr>
        <td class="uno">Klasa: 4B gr_2</td>
        <td><a href="#" onclick="document.forms[1].submit()">wzór</a></td>
    </tr>
    <tr>
        <th colspan="2">Data: {$data}</th>
    </tr>
</table>
<br>
{$wynik}
TABLE;

echo $table;
?>
