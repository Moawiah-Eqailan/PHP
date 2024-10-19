<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $color = array(4 => 'white', 6 => 'green', 11 => 'red');

    echo "<ul>";

    $first_elemant = reset($color);

    echo "<li> $first_elemant</li>";

    echo "</ul>";


    echo "<a href=Cities.php><button>Back To Cities</button></a>";

    echo "<a href=ArrayInPosition.php><button>Next To array in position</button></a><br><br>";

    echo "<a href=../../php_task/index.php><button>To Home Page</button></a>";

    ?>


</body>

</html>