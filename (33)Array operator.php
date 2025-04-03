WAP in php to demonstrate array operator
<br>
<?php

$x = array("a" => "Red","b" => "Green","y" => "Blue");
$y = array("y" => "Yellow","v" => "Orange","w" => "Pink");

$z = $x + $y; 
var_dump($z); 
echo "<br>";

var_dump($x == $y); // Output: boolean false
echo "<br>";

var_dump($x === $y); // Output: boolean false
echo "<br>";

var_dump($x != $y); // Output: boolean true
echo "<br>";

var_dump($x <> $y); // Output: boolean true
echo "<br>";

var_dump($x !== $y); // Output: boolean true
echo "<br>";
echo "This Program is written by Sachin Waghela 0221BCA025"
?>
