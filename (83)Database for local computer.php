WAP in php to  demonstrate to create database for your local computer
<br>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    // Check if database exists
    $db_check = $conn->select_db("mydb");
    if ($db_check) {
        echo "Database already exists.";
    } else {
        // Create database if it doesn't exist
        $sql = "CREATE DATABASE mydb";
        if ($conn->query($sql) === TRUE) {
            echo "Database created successfully";
        } else {
            echo "Error creating database: " . $conn->error;
        }
    }

    $conn->close();

    echo "<br>";
    echo "This Program is written by Sachin Waghela 0221BCA025";
?>
   
