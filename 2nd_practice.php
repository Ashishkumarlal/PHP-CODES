<?php
$num = 7;
$count = 0;

for($i = 1; $i <= $num; $i++)
{
    if($num % $i == 0)
    {
        $count++;
    }
}

if($count == 2)
{
    echo "The number is Prime";
}
else
{
    echo "The number is Not Prime";
}
?>
