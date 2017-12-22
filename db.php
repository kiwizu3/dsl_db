<?php
$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dsl_db";
        
        // Create connection
        $connection = new mysqli($servername, $username, $password, $dbname);

        //Converting Dat to UTF-8
        mysqli_set_charset($connection,"utf8");
        // Check connection
        if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
        }


        ?>