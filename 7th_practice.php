<?php
function displayFloydsTriangle($n)
{
    $count = 1; 
    for($i = 1; $i <= $n; $i++)
    {
        for($j = 1; $j <= $i; $j++)
        {
            echo $count . " ";
            $count++;
        }
        echo "<br>";
    }
}
$n = 5;
displayFloydsTriangle($n);
?>