<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $connection = new PDO("mysql:host=$servername;dbname=CountryDB", $username, $password);
        // set the PDO error mode to exception
        $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully </br>";

    } catch (PDOException  $e) {
        echo "Connection Failed ". $e->getMessage();
    }

?>