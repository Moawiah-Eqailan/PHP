<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $num = 10; 
    for ($i = 1; $i <= $num; $i++) {
        echo $i;

        if ($i < $num) {
            echo "-";
        }
    }



    echo "<br><br><br><a href=integers.php><button>Next to Integers</button></a>";

    echo "<br><br><a href=../../php_task/index.php><button>To Home Page</button></a>";
    ?>

</body>

</html>
