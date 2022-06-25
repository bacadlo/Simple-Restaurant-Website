<?php
// define variables and set to empty values
$lunch = $beverage = $desert = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lunch = test_input($_POST["lunch"]);
    $beverage = test_input($_POST["beverage"]);
    $desert = test_input($_POST["desert"]);

}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (empty($lunch) || empty($beverage) || empty($desert)) 
{
    echo("Missing Information!");
}
else {
    echo "<h3>Order Submitted!<h3>";
    echo $lunch;
    echo "<br>";
    echo $beverage;
    echo "<br>";
    echo $desert;
}
?>