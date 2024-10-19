<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $num = 30;
    $total = 0;

    for ($i = 1; $i <= $num; $i++) {
        echo $i, " ";
        $total += $i;
    }


    echo "<br><br>Total Number is : " . $total;




    echo "<br><br><br><a href=displays.php><button>Back To Displays</button></a>";

    echo "<a href=nestedFor.php><button>Next To Nested For</button></a><br><br>";

    echo "<a href=../../php_task/index.php><button>To Home Page</button></a>";
    ?>

</body>

</html>