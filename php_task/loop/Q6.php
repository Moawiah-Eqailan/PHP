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


    echo "<br><br><br><a href=nested01.php><button>Back To Nested 01 For</button></a>";

    echo "<a href=cellpadding.php><button>Next To Cellpadding</button></a><br><br>";

    echo "<a href=../../php_task/index.php><button>To Home Page</button></a>";

    ?>

</body>

</html>