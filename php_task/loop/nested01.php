<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentn</title>
</head>

<body>

    <?php
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= 5; $j++) {
            if ($i == $j) {
                echo "$i ";
            } else {
                echo "0 ";
            }
        }
        echo "<br>";
    }

    echo "<br><br><br><a href=nestedNum.php><button>Back To Nested Num For</button></a>";

    echo "<a href=Q6.php><button>Next To Q6</button></a><br><br>";

    echo "<a href=../../php_task/index.php><button>To Home Page</button></a>";

    ?>

</body>

</html>