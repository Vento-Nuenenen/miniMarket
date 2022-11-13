<?php
    include 'dbconnect.php';

    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $shirt_size = $_POST['shirt_size'];
    $shirt_color = $_POST['shirt_color'];
    $print_color = $_POST['print_color'];
    $print_placing = $_POST['print_placing'];
    $byos = $_POST['byos'] ? 1 : 0;
    $count = $_POST['count'];

    $query = "INSERT INTO `minimarket`
        (`name`, `contact`, `shirt_size`, `shirt_color`, 
         `print_color`, `print_placing`, `byos`, `count`) 
        VALUES ('$name','$contact','$shirt_size','$shirt_color',
                '$print_color','$print_placing','$byos','$count')";

    print_r($query);
    $bestellung = mysqli_query($db, $query);
    print_r($bestellung);


