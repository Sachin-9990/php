WAP in php to calculate number of digits in a given number
<br>
<?php
// Input number
$number = 153;

// Make the number positive if it's negative
$number = abs($number);

// Initialize a variable to count digits
$count = 0;

// If the number is 0, it has 1 digit
if ($number == 0) {
    $count = 1;
} else {
    // Count digits by repeatedly dividing by 10
    while ($number > 0) {
        $number = (int)($number / 10);
        $count++;
    }
}

// Output the result
echo "The number of digits is: " . $count;
echo "<br>";
echo "This Program is written by Sachin Waghela 0221BCA025"
?>
