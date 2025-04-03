WAP in php to demonstrate date_add function
<br>
<!DOCTYPE html>
<html>
<body>

<?php

    $date=date_create("2024-02-21");
    date_add($date,date_interval_create_from_date_string("40 days"));
    echo date_format($date,"Y-m-d");

?>

<br>
"This Program is written by Sachin Waghela 0221BCA025"
</body>
</html>
