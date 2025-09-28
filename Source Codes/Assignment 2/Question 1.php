<!DOCTYPE html>
<html>
<head>
    <title>Arithmetic Operations</title>
</head>
<body>

<form method="post">
    Enter first number: <input type="number" name="num1" required><br><br>
    Enter second number: <input type="number" name="num2" required><br><br>
    <button type="submit" value="Calculate">Calculate</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    // Perform operations
    $addition = $num1 + $num2;
    $subtraction = $num1 - $num2;
    $multiplication = $num1 * $num2;
    $division = $num2 != 0 ? $num1 / $num2 : "Undefined (division by zero)";
    $modulus = $num2 != 0 ? $num1 % $num2 : "Undefined";

    // Display results in a table
    echo "<h3>Results:</h3>";
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>Operation</th><th>Result</th></tr>";
    echo "<tr><td>Addition</td><td>$addition</td></tr>";
    echo "<tr><td>Subtraction</td><td>$subtraction</td></tr>";
    echo "<tr><td>Multiplication</td><td>$multiplication</td></tr>";
    echo "<tr><td>Division</td><td>$division</td></tr>";
    echo "<tr><td>Modulus</td><td>$modulus</td></tr>";
    echo "</table>";

    var_dump(value: $num1);

    echo "<pre>";
        print_r(value: $num1);
    echo "</pre>";
}
?>
</body>
</html>
