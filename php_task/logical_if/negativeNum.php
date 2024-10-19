<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Number</title>
</head>

<body>
    <form method="POST">
        <label>Enter Any Number, <br>positive, negative or zero:</label>
        <br>
        <input type="number" name="number" id="number" required><br><br>
        <input type="submit"><br><br>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num = $_POST['number'];

        if ($num > 0) {
            echo "$num is a Positive number.";
        } elseif ($num < 0) {
            echo "$num is a Negative number.";
        } else {
            echo "Zero.";
        }
    };




    echo "<br><br><br><a href=calculate.php><button>Back To Calculate</button></a>";

    echo "<a href=grade.php><button>Next To Grade </button></a><br><br>";

    echo "<a href=../../php_task/index.php><button>To Home Page</button></a>";


    ?>
</body>

</html>
