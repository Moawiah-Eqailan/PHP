<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Number</title>
</head>

<body>
    <form method="POST">
        <label>Enter Grade</label>
        <br>
        <input type="number" name="number" id="number" required><br><br>
        <input type="submit"><br><br>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num = $_POST['number'];

        if ($num > 100 || $num < 0) {
            echo "Please enter a valid grade between 0 and 100.";
        } elseif ($num >= 90) {
            echo "$num is: A";
        } elseif ($num >= 80) {
            echo "$num is: B";
        } elseif ($num >= 70) {
            echo "$num is: C";
        } elseif ($num >= 60) {
            echo "$num is: D";
        } else {
            echo "$num is: F";
        }
    }
    echo "<br><br><br><a href=negativeNum.php><button>Back To Negative Num</button></a>";

        echo "<br><br><a href=../../php_task/index.php><button>To Home Page</button></a>";
    
    ?>
</body>

</html>
