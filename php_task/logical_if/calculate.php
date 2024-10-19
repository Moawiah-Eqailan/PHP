<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label>Enter number of units:</label><br>
        <input type="number" name="number" id="number" required><br><br>
        <input type="submit"><br><br>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num = $_POST['number'];
        $total = 0;

        if ($num <= 50) {
            $total = 2.50;
            echo "$num units = " . number_format($total, 2) . " JOD";
        } elseif ($num <= 100) {
            $total = 5.00;
            echo "$num units = " . number_format($total, 2) . " JOD";
        } elseif ($num <= 250) {
            $total = 6.20;
            echo "$num units = " . number_format($total, 2) . " JOD";
        } elseif ($num > 250) {
            $total = 7.50;
            echo "$num units = " . number_format($total, 2) . " JOD";
        } else {
            echo "Error: Please enter a valid number of units.";
        }
    };


    echo "<br><br><br><a href=intRange.php><button>Back To int Range</button></a>";

    echo "<a href=calculator.php><button>Next To Calculator </button></a><br><br>";

    echo "<a href=../../php_task/index.php><button>To Home Page</button></a>";


    ?>

</body>

</html>