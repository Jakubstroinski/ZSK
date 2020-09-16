<?php
  # localhost/ZSK/zadanie <- sciezka do pliku 
  $name = 'Janusz';
  $lastName = 'Skompski';
  echo 'Imie: $name<br>';
  echo " Imie: $name<br>";
  // konkatenacja w php to '.'
  echo 'Nazwisko: $lastName'.'<br>';
  echo " Nazwisko: $lastName".'<br>';

  //zmienne
  //boolean
  $prawda = true; //zwraca 1, wyswietla
  $fausz = false; //zwraca 0, nie wyswietla

  echo $prawda;
  echo "$fausz<br>";

  //integer
  $bin = 0b1011; //11
  $oct = 011; //9
  $dec = 11; //11
  $hex = 0xA; //10
  
  echo "$bin<br>";

  //składnia heredoc
  $name = 'Janusz';
  $lastName = 'Nowak';

  $tekst = <<<LABEL
  <hr>
  Imię: $name<br>
  <hr>
  Nazwisko: $lastName<br>
  <hr>
  LABEL;
  
  echo <<<L
  heredoc2
  <br>
  imie: $name<hr>
  L;

  // nowdoc
  echo <<<'L'
  nowdoc
  <br>
  imie: $name<hr>
  L;

  $city = 'Poznań';
  echo "Nazwa zmiennej: \$city, wartość: $city"
 ?>











