WAP in php to enter makrs of 5 subject using associative array and displaying the total and marks in percentage
<br>
<?php
$marks = array( 
    "Maths" => 100,
    "English" => 88,
    "Science" => 90,
    "History" => 98,
    "Geography" => 92
);

// Calculate total marks
$total_marks = 0;
foreach($marks as $subject => $mark) {
    $total_marks += $mark;
}

// Calculate percentage
$percentage = ($total_marks / 500) * 100;

// Display the result
echo "Marks of the student:\n";
foreach($marks as $subject => $mark) {
    echo $subject . ": " . $mark . " marks\<br>";
}
echo "Total Marks: " . $total_marks . " / 500\<br>";
echo "Percentage: " . number_format($percentage, 2) . "%\<br>";
echo "<br>";
echo "This Program is written by Sachin Waghela 0221BCA025"
?>
