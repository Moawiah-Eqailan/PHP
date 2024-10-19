<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    //  Without using the function: 
    // echo strrev("remove");



    // with the use of the function:
    function reverse($string)
    {
        return strrev($string);
    }
    echo reverse("remove");
    echo "<br>";
    echo reverse("orange");



    echo "<br><br><br><a href=primeNumber.php><button>Back To Prime Number</button></a>";

    echo "<a href=swap.php><button>Next To Swap</button></a><br><br>";

    echo "<a href=../../php_task/index.php><button>To Home Page</button></a>";


    ?>

</body>

</html>