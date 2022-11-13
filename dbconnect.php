<?php
    $db = mysqli_connect("localhost", "root", "1234", "minimarket");
    if(!$db){
        exit("Verbindungsfehler: ".mysqli_connect_error());
    }