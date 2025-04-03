WAP for finding the biggest number in an array without using any array functions
<br>
<?php

$array = [1, 4, 6, 8, 18];
$num = $array[0]; // Initialize with the first element of the array

for ($i = 1; $i < count($array); $i++) {
    if ($num < $array[$i]) {
        $num = $array[$i];
    }
}

echo "The biggest number is " . $num . "<br>";
echo "This Program is written by Sachin Waghela 0221BCA025";
?>
