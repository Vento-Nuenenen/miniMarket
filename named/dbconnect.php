<?php
    $config = require 'config.php';

    $db = mysqli_connect($config['dbhost'], $config['dbuser'], $config['dbpass'], $config['dbname']);
    if(!$db){
        exit("Verbindungsfehler: ".mysqli_connect_error());
    }