<?php
if(isset($_POST['submit']))
{
    $name = $_POST['username'];
    echo "Your name is: " . $name;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Form</title>
</head>
<body>

<form method="post">
    Enter your name:
    <input type="text" name="username">
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
