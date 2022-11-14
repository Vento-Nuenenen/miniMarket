<?php
    include 'dbconnect.php';

    $config = require 'config.php';

    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $shirt_size = $_POST['shirt_size'];
    $shirt_color = $_POST['shirt_color'];
    $print_color = $_POST['print_color'];
    $print_placing = $_POST['print_placing'];
    $byos = $_POST['byos'] ? 1 : 0;
    $count = $_POST['count'];
    if ($shirt_color == "tie_dye_black" || $shirt_color == "tie_dye_blue_green" || $shirt_color == "tie_dye"){
        $price = ($config['specialPriceShirt'] + $config['pricePrint']) * $count;
    } else {
        $price = ($config['priceShirt'] + $config['pricePrint']) * $count;
    }


    $query = "INSERT INTO `minimarket`
        (`name`, `contact`, `shirt_size`, `shirt_color`, 
         `print_color`, `print_placing`, `byos`, `count`, `price`) 
        VALUES ('$name','$contact','$shirt_size','$shirt_color',
                '$print_color','$print_placing','$byos','$count', '$price');";

    $bestellung = mysqli_query($db, $query);

    header("Location: /success.php");
    die();
