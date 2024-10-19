<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

    // ksort($fruits );
    asort($fruits);


    foreach ($fruits as $key => $value) {
        echo "<br>$key = $value";
    };


    echo "<br><br><a href=ArrayInPosition.php><button>Back To Array In Position</button></a>";

    echo "<a href=Average.php><button>Next To Average</button></a><br><br>";

    echo "<a href=../../php_task/index.php><button>To Home Page</button></a>";

    ?>
</body>

</html>