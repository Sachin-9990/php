WAP in php to create registration form which will ask number of things like name,class,SEM,gender,mobile_no and a submit button and after submitting the details it`ll be shwon in a tabular structure.
<br>
<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "StudentDB");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// Insert data
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $sql = "INSERT INTO students (name, class, semester, gender, mobile_no) 
            VALUES ('{$_POST['name']}', '{$_POST['class']}', '{$_POST['sem']}', '{$_POST['gender']}', '{$_POST['mobile_no']}')";
    $conn->query($sql) ? $msg = "Record submitted successfully." : $msg = "Error: " . $conn->error;
}

// Delete data
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
    $sql = "DELETE FROM students WHERE id={$_POST['id']}";
    $conn->query($sql) ? $msg = "Record deleted successfully." : $msg = "Error: " . $conn->error;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        body { font-family: Arial, sans-serif; background: #e8f0fe; }
        .container { 
            max-width: 500px; 
            margin: 50px auto; 
            background: #fff; 
            padding: 20px; 
            border-radius: 10px; 
            box-shadow: 0 4px 8px rgba(0,0,0,0.2); 
        }
        .header { 
            background: #007BFF; 
            color: white; 
            padding: 10px; 
            text-align: center; 
            font-size: 18px; 
            border-radius: 10px 10px 0 0; 
            position: relative; 
        }
        .icons-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .icons-left, .icons-right {
            display: flex;
            align-items: center;
        }
        .icons-left span {
            background: #007BFF; 
            color: white; 
            padding: 5px 15px; 
            border-radius: 20px; 
            font-size: 14px; 
            font-weight: bold; 
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        .icons-right span {
            display: inline-block;
            margin: 0 5px;
            background: #ccc;
            padding: 5px;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            text-align: center;
            font-size: 14px;
            cursor: pointer;
        }
        label { margin-top: 10px; display: block; font-weight: bold; }
        input, select, button {
            margin-bottom: 10px; 
            padding: 10px; 
            width: 100%; 
            border: 1px solid #ccc; 
            border-radius: 5px; 
            font-size: 14px; 
        }
        button {
            background: #007BFF; 
            color: white; 
            font-weight: bold; 
            cursor: pointer; 
        }
        button.cancel {
            background: #dc3545; 
        }
        table {
            margin-top: 20px; 
            width: 100%; 
            border-collapse: collapse;
        }
        th, td {
            padding: 8px; 
            border: 1px solid #ccc; 
            text-align: center;
        }
        th {
            background: #007BFF; 
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="icons-row">
        <div class="icons-left">
            <span class="page-number">Page 1</span>
        </div>
        <div class="icons-right">
            <span title="Minimize">_</span>
            <span title="Split Screen">||</span>
            <span title="Close">X</span>
        </div>
    </div>
    <div class="header">Registration Form</div>
    <form method="POST" action="">
        <label>Name:</label>
        <input type="text" name="name" required>
        
        <label>Class:</label>
        <select name="class" required>
            <option value="BCA">BCA</option>
            <option value="BBA">BBA</option>
        </select>
        
        <label>Semester:</label>
        <input type="text" name="sem" required>
        
        <label>Gender:</label>
        <select name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        
        <label>Mobile No:</label>
        <input type="text" name="mobile_no" required>
        
        <button type="submit" name="submit">Submit</button>
        <button type="button" class="cancel" onclick="window.location.reload();">Cancel</button>
    </form>
    <?php if (isset($msg)) echo "<p>$msg</p>"; ?>
    
    <h3>Submitted Records</h3>
    <?php
    $result = $conn->query("SELECT * FROM students");
    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Name</th><th>Class</th><th>Semester</th><th>Gender</th><th>Mobile No</th><th>Action</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['class']}</td>
                    <td>{$row['semester']}</td>
                    <td>{$row['gender']}</td>
                    <td>{$row['mobile_no']}</td>
                    <td>
                        <form method='POST' action='' style='display:inline;'>
                            <input type='hidden' name='id' value='{$row['id']}'>
                            <button type='submit' name='delete'>Delete</button>
                        </form>
                    </td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No records found.</p>";
    }
    ?>
</div>
</body>
</html>
"This Program is written by Sachin Waghela 0221BCA025"
