WAP in php to create a table in mysql database
<br>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    // Check if the table exists
    $sql_check = "SHOW TABLES LIKE 'students'";
    $result = $conn->query($sql_check);

    if ($result->num_rows > 0) {
        echo "Table 'students' already exists.";
    } else {
        // SQL to create table
        $sql = "CREATE TABLE students (
            Stud_ID int(11) NOT NULL,
            Stud_Name varchar(40) NOT NULL,
            Stud_Email varchar(40) NOT NULL,
            Stud_Contact char(10) NOT NULL
        )";

        if ($conn->query($sql) === TRUE) {
            echo "Table 'students' created successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }
    }

    $conn->close();

    echo "<br>";
    echo "This Program is written by Sachin Waghela 0221BCA025";
?>
