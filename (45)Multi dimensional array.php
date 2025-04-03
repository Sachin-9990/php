WAP in php to demonstrate muli-dimensional array
<br>
<hl>
<body>

<?php
    $marks = array(
     "roshan" => array (
       "physics"=>35,
       "maths"=>30,
       "chemistry"=>39
),

 "twinkle" => array (
  "physics"=>30,
  "maths"=>32,
  "chemistry"=>29
),

"zara" => array (
  "physics"=>31,
  "maths"=>22,
  "chemistry"=>39
  )
);

/* Accessing multi-dimensional array values */
echo "Marks for Roshan in physics : " ;
echo $marks['roshan']['physics'] . "<br />";

echo "Marks for Twinkle in maths : ";
echo $marks['twinkle']['maths'] . "<br/>";

echo "Marks for Zara in chemistry : " ;
echo $marks['zara']['chemistry'] . "<br />";
?>

"This Program is written by Sachin Waghela 0221BCA025"
</body>
</hl>
