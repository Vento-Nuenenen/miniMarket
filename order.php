<?php
    include 'dbconnect.php';

    $config = require 'config.php';

    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $print_color = $_POST['print_color'];
    $print_placing = $_POST['print_placing'];
    $count = $_POST['count'];
    $price = $config['pricePrint'];

    $query = "INSERT INTO `minimarket`
        (`name`, `contact`, `print_color`, 
         `print_placing`, `count`, `price`) 
        VALUES ('$name','$contact', '$print_color',
                '$print_placing','$count', '$price');";

    $bestellung = mysqli_query($db, $query);

    header("Location: /success.php");
    die();
