<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $start_char = 'A';

    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            if ($j < 5 - $i - 1) {
                echo "A ";
            } else {
                echo chr(ord($start_char) + $i) . " ";
            }
        }
        echo "<br>";
    }



    echo "<br><br><br><a href=displays.php><button>Back To Displays</button></a>";

    echo "<a href=nestedNum.php><button>Next To Nested Num</button></a><br><br>";

    echo "<a href=../../php_task/index.php><button>To Home Page</button></a>";

    ?>

</body>

</html>