<?php
    $foods = [
        [
            "title" => "อาหาร",
            "price" => 399
        ],
        [
            "title" => "ผลไม้",
            "price" => 299
        ],
    ];
    ?>
    <!-- // for($i = 0; $i < count($foods); $i++){
    //     $food = $foods[$i];
    //     echo "<h2>$food[title]</h2>";
    //     echo "<p>$food[price]</p>";
    // }

    // foreach($foods as $food){
    //     echo "<h2>$food[title]</h2>";
    //     echo "<p>$food[price]</p>";
    // } -->

    <?php foreach($foods as $food): ?>
        <div>
            <h2><?php echo $food["title"]; ?></h2>
            <p>ราคา = <?php echo $food["price"];?> บาท</p>
        </div>
    <?php endforeach; ?>
