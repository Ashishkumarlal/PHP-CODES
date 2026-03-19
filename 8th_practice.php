<?php
 /*Accept any number from 1 - 10 and print the numbers from 1 - 10 other than the user given
number.(using ‘continue’)*/

$number = readline("Enter a number between 1 and 10: ");
if ($number < 1 || $number > 10) {
    echo "Please enter a valid number between 1 and 10.";
} else {
    echo "Numbers from 1 to 10 except $number: ";
    for ($i = 1; $i <= 10; $i++) {
        if ($i == $number) {
            continue; // Skip the user given number
        }
        echo $i . " ";
    }
}
?>