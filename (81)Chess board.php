WAP in php to make a chess board
<br>
<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Plain Chess Board</title>
    <style>
        table { 
            border-collapse: collapse; 
            border: 4px solid black; 
        }
        td { 
            width: 60px; 
            height: 60px; 
            border: 1px solid black; 
        }
        .white { background-color: #EEE; }
        .black { background-color: #555; }
    </style>
</head>
<body>
<table>
<?php
for ($row = 0; $row < 8; $row++) {
    echo "<tr>";
    for ($col = 0; $col < 8; $col++) {
        $class = (($row + $col) % 2 == 0) ? "white" : "black";
        echo "<td class='{$class}'></td>";
    }
    echo "</tr>";
}

?>
</table>
</body>
</html>
<br>
"This Program is written by Sachin Waghela 0221BCA025"
