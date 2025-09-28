<form method="post">
    Enter number: <input type="number" name="num" required><br><br>
    <button type="submit" value="Calculate">Enter</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['num'];

    if ($number % 2 == 0) {
        echo "$number is Even";
    } else {
        echo "$number is Odd";
    }
}
?>
