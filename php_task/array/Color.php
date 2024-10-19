<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $color = array("White", "Green", "Red");

    echo "<br> <ul>";
    foreach ($color as $color) {
        echo "<li>$color</li>";
    }
    echo "</ul>";

    echo "<a href=Cities.php><button>Next To Cities</button></a><br><br>";

    echo "<a href=../../php_task/index.php><button>To Home Page</button></a>";
    ?>
</body>

</html>