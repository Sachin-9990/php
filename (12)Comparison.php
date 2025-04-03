WAP to demonstrate comparison operators in php
<br>
<?php

    $x = 25;
    $y = 35;
    $z = "25";
    
    var_dump($x == $z) ;  echo "<br>";  // Outputs: boolean true
    var_dump($x === $z);  echo "<br>";// Outputs: boolean false
    var_dump($x != $y);  echo "<br>"; // Outputs: boolean true
    var_dump($x !== $z);  echo "<br>";// Outputs: boolean true
    var_dump($x < $y);   echo "<br>"; // Outputs: boolean true
    var_dump($x > $y);  echo "<br>";  // Outputs: boolean false
    var_dump($x <= $y);  echo "<br>"; // Outputs: boolean true
    var_dump($x >= $y);  echo "<br>"; // Outputs: boolean false
    echo "<br>";
    echo "This Program is written by Sachin Waghela 0221BCA025"

?>
