<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculation</title>
</head>

<body>

    <form method="POST">
        <label>Enter a number:</label><br>
        <input type="number" name="number" required><br><br>
        <input type="submit" value="Calculate Factorial">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num = $_POST['number'];

        $factorial = 1;

        for ($i = 1; $i <= $num; $i++) {
            $factorial *= $i;
        }

        echo "Factorial of $num is: $factorial";
    }
    ?>

</body>

</html>
