<?php
    // ประกาศตัวแปร
    $name = "Your name";
    $lastname = "my boy";
    echo "My name is : " . $name;
    echo "<br>";
    echo "Lastname : " . $lastname;
    echo "<hr>";

    // เครื่องหมายคำนวณ

    $x = 5;
    $y = 10;

    $add = $x + $y;
    $minus = $x - $y;
    $multiply = $x * $y;
    $divide = $x / $y;

    echo "<p>$add</p>";
    echo "<p>$minus</p>";
    echo "<p>$multiply</p>";
    echo "<p>$divide</p>";

    $power = $x ** $y;
    $remainders = $x % $y;

    echo "$power";
    echo "$remainders";
    echo "<hr>";


    // แบบมีเงื่อนไข

    $temperature = 25;

    if($temperature >= 30){
        echo "ร้อน";
    }elseif($temperature >= 20){
        echo "สบายตัว";
    }elseif($temperature >= 10){
        echo "เย็น";
    }else{
        echo "หนาวใจจะขาด";
    }
    echo "<hr>";

    // loop
    
    for($i = 5; $i <= 10; $i++){
        $result = 2 ** $i;
        echo "<p>$result</p>";
    }

    echo "<hr>";

    for($i = 10; $i <= 20; $i++){
        if($i % 3 == 0){
            continue;        
        }
        echo "<p>$i</p>";
    }
    echo "<hr>";

    for($i = 12; $i <= 24; $i++){
        if($i % 10 == 0){
            break;        
        }
        echo "<p>$i</p>";
    }
    echo "<hr>";
?>