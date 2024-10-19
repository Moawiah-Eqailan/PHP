<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    function checkSum($num)
    {
        if ($num % 3 == 0) {
            return "$num ( True )";
        } else {
            return "( False )";
        }
    }

    $num = 20;
    $result = checkSum($num, $num, $num);
    echo "<br> $num * 3 = $result <br> $num is not multiple of 3 <br>";

    $num = 27;
    $result = checkSum($num, $num, $num);
    echo "<br> $num * 3 = $result <br> $num is multiple of 3";






    echo "<br><br><br><a href=ifCondition.php><button>Back To If Condition</button></a>";

    echo "<a href=intRange.php><button>Next To int Range</button></a><br><br>";

    echo "<a href=../../php_task/index.php><button>To Home Page</button></a>";
    ?>
</body>

</html>