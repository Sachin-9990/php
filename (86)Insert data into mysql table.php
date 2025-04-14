WAP in php to insert data into mysql table
<br>
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // Enable error reporting

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    // Insert query
    $sql = "INSERT INTO students (Stud_ID, Stud_Name, Stud_Email, Stud_Contact)
        VALUES (111, 'Akshay', 'akshay.unique111@gmail.com', '1234567890')";
        
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();

    echo "<br>";
    echo "This Program is written by Sachin Waghela 0221BCA025";
?>
