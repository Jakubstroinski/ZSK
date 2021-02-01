<?php

  $price = 25;
  $quantity = 0;
  $barrelBulk = '';

  function calcPrice($price, $quantity, $barrelBulk){

    $result = ($price*$quantity).$barrelBulk;
    echo $result;

  }

  calcPrice(25, 6, "zł");
?>