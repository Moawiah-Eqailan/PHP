<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
    
    $result = array_merge($array1, $array2);
    echo "<pre>";
    print_r($result);
    echo "</pre>";


    echo "<br><br><a href=Average.php><button>Back To Average</button></a>";

    echo "<a href=upperCase.php><button>Next To Upper Case</button></a><br><br>";

    echo "<a href=../../php_task/index.php><button>To Home Page</button></a>";
    ?>


</body>

</html>