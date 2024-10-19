<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label>Minimum age required for voting is 18 ! <br>plz enter your age:</label>
        <br>
        <input type="number" name="number" id="number" required><br><br>
        <input type="submit"><br><br>
    </form>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num = $_POST['number'];



        if ($num >=18 && $num <= 110) {
            echo "$num is eligible to vote";
        } else {
            echo "$num is no eligible to vote";
        }
    };


    echo "<br><br><br><a href=calculator.php><button>Back To Calculator</button></a>";

        echo "<a href=negativeNum.php><button>Next To Negative Num</button></a><br><br>";
    
        echo "<a href=../../php_task/index.php><button>To Home Page</button></a>";

    ?>

</body>

</html>