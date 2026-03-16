<?php

if(isset($_POST['marks']))
{
    $marks = $_POST['marks'];

    if($marks >= 90)
        $grade = "A+";
    elseif($marks >= 80)
        $grade = "A";
    elseif($marks >= 70)
        $grade = "B";
    elseif($marks >= 60)
        $grade = "C";
    elseif($marks >= 50)
        $grade = "D";
    else
        $grade = "Fail";

    echo "Marks Entered: " . $marks . "<br>";
    echo "Grade: " . $grade;
}

?>