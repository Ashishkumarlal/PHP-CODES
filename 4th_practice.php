<?php
$a = readline("Enter first number : ");
$b = readline("Enter second number : ");
$c = readline("Enter third number : ");
if($a > $b && $a > $c) {
    echo "The largest number is : " . $a;
} elseif($b > $a && $b > $c) {
    echo "The largest number is : " . $b;
} else {
    echo "The largest number is : " . $c;
}
?>