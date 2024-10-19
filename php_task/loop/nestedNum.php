<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= 5; $j++) {
            if ($j > 5 - $i) {
                echo "$i ";
            } else {
                echo "1 ";
            }
        }
        echo "<br>";
    }
    echo "<br><br><br><a href=nestedFor.php><button>Back To Nested For</button></a>";

    echo "<a href=nested01.php><button>Next To Nested 01</button></a><br><br>";

    echo "<a href=../../php_task/index.php><button>To Home Page</button></a>";


    ?>

</body>

</html>