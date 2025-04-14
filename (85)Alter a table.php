WAP in php to alter a table in MySQL database
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

// Define database name
$dbname = "mydb";

// Check if the database exists, if not, create it
$db_check = $conn->select_db($dbname);
if (!$db_check) {
    $sql = "CREATE DATABASE $dbname";
    if ($conn->query($sql) === TRUE) {
        echo "Database '$dbname' created successfully<br>";
    } else {
        echo "Error creating database: " . $conn->error . "<br>";
    }
} else {
    echo "Database '$dbname' already exists<br>";
}

// Select the database
$conn->select_db($dbname);

// Check if the table exists
$sql_check_table = "SHOW TABLES LIKE 'students'";
$result = $conn->query($sql_check_table);

if ($result->num_rows > 0) {
    echo "Table 'students' already exists<br>";
} else {
    // SQL to create table
    $tableSql = "CREATE TABLE students (
        Stud_ID INT NOT NULL AUTO_INCREMENT,
        Stud_Name VARCHAR(255) NOT NULL,
        Stud_Email VARCHAR(255) NOT NULL,
        PRIMARY KEY (Stud_ID),
        UNIQUE KEY Stud_Email (Stud_Email)
    )";
    if ($conn->query($tableSql) === TRUE) {
        echo "Table 'students' created successfully<br>";
    } else {
        echo "Error creating table: " . $conn->error . "<br>";
    }
}

$conn->close();

echo "<br>";
echo "This Program is written by Sachin Waghela 0221BCA025";
?>
