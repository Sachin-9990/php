WAP to print the below format
* * * * * * * * * * * * * * * * *<br>
* * * * * * * * * * * * * * * *<br>
* * * * * * * * * * * * * *<br>
* * * * * * * * * * * *<br>
* * * * * * * * *<br>
* * * * * * *<br>
* * * * *<br>
* * *<br>
*<br>
<br>
<?php

for ($i = 15; $i >= 1; $i -= 2) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "This Program is written by Sachin Waghela 0221BCA025"
?>
