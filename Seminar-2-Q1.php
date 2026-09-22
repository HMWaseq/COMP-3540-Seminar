<?php

function isMultipleOf15($num)
{
    return ($num % 15 == 0);
}

$result = "";

if (isset($_POST['number']))
{
    $number = $_POST['number'];

    if (isMultipleOf15($number))
    {
        $result = "$number is a multiple of 15.";
    }
    else
    {
        $result = "$number is NOT a multiple of 15.";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Multiple of 15 Checker</title>
</head>
<body>

    <h2>Check if a Number is a Multiple of 15</h2>

    <form method="post">
        Enter a Number:
        <input type="number" name="number" required>
        <input type="submit" value="Check">
    </form>

    <br>

    <?php
        echo $result;
    ?>

</body>
</html>
