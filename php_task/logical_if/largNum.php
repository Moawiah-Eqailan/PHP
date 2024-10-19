<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    function  largest_number($larg)
    {
        $largest = $larg[0];
        for ($i = 1; $i < count($larg); $i++) {
            if ($larg[$i] > $largest) {
                $largest = $larg[$i];
            }
        }
        return $largest;
    }
    $larg = [1, 5, 9];
    echo "<br>Largest Number is : " . largest_number($larg);


    $larg = [3, 5, 20, 6, 1, 10, 2, 9, 12];
    echo "<br><br>Largest Number is : " . largest_number($larg);




    echo "<br><br><br><a href=intRange.php><button>Back To int Range</button></a>";

    echo "<a href=calculate.php><button>Next To Calculate </button></a><br><br>";

    echo "<a href=../../php_task/index.php><button>To Home Page</button></a>";

    ?>
</body>

</html>