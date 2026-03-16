<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<h2>Simple Calculator</h2>

<form method="post">
    Enter First Number:
    <input type="number" name="num1" step="any" required><br><br>

    Enter Second Number:
    <input type="number" name="num2" step="any" required><br><br>

    Select Operation:
    <select name="operation" required>
        <option value="add">Addition</option>
        <option value="subtract">Subtraction</option>
        <option value="multiply">Multiplication</option>
        <option value="divide">Division</option>
    </select><br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if(isset($_POST['submit'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = "";

    if($operation == "add") {
        $result = $num1 + $num2;
    }
    elseif($operation == "subtract") {
        $result = $num1 - $num2;
    }
    elseif($operation == "multiply") {
        $result = $num1 * $num2;
    }
    elseif($operation == "divide") {
        if($num2 != 0) {
            $result = $num1 / $num2;
        } else {
            $result = "Cannot divide by zero";
        }
    }

    echo "<h3>Result: " . $result . "</h3>";
}
?>

</body>
</html>