<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        #fun {
            background-color: #000;
            color: #fff;
            transition: .2s;
        }

        #fun:hover {
            transform: scale(1.1);
        }
    </style>
</head>

<body>

    <?php

    $colors = array("red", "blue", "white", "yellow");

    foreach ($colors as $colors) {
        echo strtoupper("<br> $colors");
    }

    echo "<br><br><a href=merge.php><button>Back To Merge</button></a>";

    echo "<a href=Average.php><button>Next To Average</button></a><br><br>";

    echo "<a href=../../php_task/index.php><button>To Home Page</button></a>";

    echo "<a href=../../php_task/fun><button id=fun>To Function Page</button></a>";
    ?>


</body>

</html>