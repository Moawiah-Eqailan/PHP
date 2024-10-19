<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    function checkSum($num1, $num2)
    {
        $sum = $num1 + $num2;

        if ($sum == 30) {
            return "$sum ( True )";
        } else {
            return "( False) ";
        }
    }
    
    $num1 = 16;
    $num2 = 15;
    $result = checkSum($num1, $num2);
    echo "<br>$num1 + $num2 = $result<br>" ;

    $num1 = 15;
    $num2 = 15;
    $result = checkSum($num1, $num2);
    echo "<br>$num1 + $num2 = $result<br>" ;





    echo "<br><a href=multiple.php><button>Next To Multiple</button></a><br><br>";

    echo "<a href=../../php_task/index.php><button>To Home Page</button></a>";
    
    ?>
</body>

</html>