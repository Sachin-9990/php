WAP to demonstare for loop in php
<br>
<?php

    /* example 1 */
    echo "First Way \t";
    for ($i = 1; $i <= 10; $i++)
    {
        echo "<br>";
        echo $i;
    	echo "\t";
    }
    echo "<br>";
    /* example 2 */
    echo "\nAnother Way\t";
    for ($i = 1; ; $i++)
    {
        if ($i > 10)
        {
            break;
        }
        echo "<br>";
        echo $i;
    	echo "\t";
    }
        echo "<br>";
        echo "This Program is written by Sachin Waghela 0221BCA025"
?>
