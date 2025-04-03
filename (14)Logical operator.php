WAP to check wheter the given year is leap year or not
<br>
<?php

    $year = 2014;
    
    // Leap years are divisible by 400 or by 4 but not 100
    if(($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0)))
    {
        echo "$year is a leap year.";
    }
    else
    {
        echo "$year is not a leap year.";
    }
    echo "<br>";
    echo "This Program is written by Sachin Waghela 0221BCA025"

?>
