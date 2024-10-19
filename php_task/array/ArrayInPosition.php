<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    echo "<br>";

    $array = array(1, 2, 3, 4, 5);

    $location = "3";
    $newItem = "$";

    array_splice($array, $location, 0, $newItem);

    foreach ($array as $value) {
        echo $value;
    };

    echo "<br><br><a href=ColorArray.php><button>Back To Color Array</button></a>";

    echo "<a href=NumAscend.PHP><button>Next To Numbers Ascend</button></a><br><br>";

    echo "<a href=../../php_task/index.php><button>To Home Page</button></a>";

    ?>

</body>

</html>