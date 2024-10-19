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
        function armstrongCheck($num)
        {
            $total = 0;
            $x = $num;
            while ($x != 0) {
                $rem = $x % 10;
                $total = $total + $rem * $rem * $rem;
                $x = $x / 10;
            }
            if ($num == $total) {
                echo "<br>$num is Armstrong Number<br>";
            } else {
                echo "<br>$num is not Armstrong Number<br>";
            }
        }

        armstrongCheck($num);


    }


    echo "<br><br><br><a href=swap.php><button>Back To Swap</button></a>";

    echo "<a href=palindrome.php><button>Next To palindrome</button></a><br><br>";

    echo "<a href=../../php_task/index.php><button>To Home Page</button></a>";


    ?>
</body>

</html>