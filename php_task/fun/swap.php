<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    function swap($x, $y)
    {
        echo "The Numbers Before swaping is :<br>";
        echo "X=$x , Y=$y <br><br>";

        $temp = $x;
        $x = $y;
        $y = $temp;

        echo "The Numbers After swaping is :<br>";
        echo "X=$x , Y=$y <br>";
    }

    $x = 100;
    $y = 200;
    swap($x, $y);

    echo "<br><br><br>";

    $x = 20;
    $y = 40;
    swap($x, $y);






    echo "<br><br><br><a href=reverse.php><button>Back To Reverse</button></a>";

    echo "<a href=Armstrong.php><button>Next To Armstrong</button></a><br><br>";

    echo "<a href=../../php_task/index.php><button>To Home Page</button></a>";

    ?>
</body>

</html>