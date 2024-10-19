<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="POST">
        <input type="number" name="number" id="number" required><br><br>
        <input type="submit"><br><br>
    </form>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num = $_POST['number'];

        function is_prime($num)
        {
            if ($num < 2) {
                return false;
            }

            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    return false;
                }
            }
            return true;
        }

        if (is_prime($num)) {
            echo "$num is a prime number.";
        } else {
            echo "$num is not a prime number.";
        }
    }



    echo "<br><br><a href=reverse.php><button>Next To Reverse</button></a><br><br>";

    echo "<a href=../../php_task/index.php><button>To Home Page</button></a>";
    ?>
</body>

</html>