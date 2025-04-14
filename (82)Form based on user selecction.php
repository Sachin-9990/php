Create the following form & based on the user’s selection, print a message in the following format.
<!DOCTYPE html>
<html>
<head>
    <title>Favorite Car Selection</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .form-container {
            width: 300px;
            padding: 20px;
            border: 2px solid black;
            border-radius: 10px;
            text-align: center;
            margin: 50px 0;
            background-color: #f9f9f9;
        }
        .result {
            text-align: left; /* Aligns the output text to the left */
            font-size: 20px;
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Please select your favorite car</h2>

    <form method="post">
        <input type="radio" name="car" value="Nissan" required> Nissan <br>
        <input type="radio" name="car" value="Toyota"> Toyota <br>
        <input type="radio" name="car" value="Mitsubishi"> Mitsubishi <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</div>

<?php
if (isset($_POST['submit'])) {
    $favoriteCar = $_POST['car'];
    echo "<div class='result'>Your favorite car is $favoriteCar</div>";
}
?>
<br>
</body>
</html>
"This Program is written by Sachin Waghela 0221BCA025"
