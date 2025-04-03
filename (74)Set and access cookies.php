WAP in php to set and access cookies
<br>
<?php

    // Setting a cookie
    setcookie("username", "Aaryan Goel", time()+30*24*60*60);
    
    // Verifying whether a cookie is set or not
    if(isset($_COOKIE["username"])){
        echo "Hi " . $_COOKIE["username"] . "<br>";
    } else{
        echo "Welcome Guest!\n";
    
    }
    
    print_r($_COOKIE);
    echo "<br>";
    echo "This Program is written by Sachin Waghela 0221BCA025"
?>
