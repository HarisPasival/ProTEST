<?php
    
    function totalPrice(){
        $price = 120;
        $quantity = 5;
        $totalPrice = $price * $quantity;
        echo "<p>$totalPrice</p>";
    }
    totalPrice();

    echo "<hr>";

    function sumPrice($price1, $quantity1){
        $sumPrice = $price1 * $quantity1;
        echo "<p>$sumPrice</p>";
    }

    $price1 = 200;
    $quantity1 = 2;
    sumPrice($price1, $quantity1);

    echo "<hr>";

    function avege($price2, $quantity2){
        $avege = $price2 + $quantity2;
        return $avege;
    }

    $avege = avege(250, 3);

    echo "<h2>$avege</h2>"; 
?>