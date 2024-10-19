<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $cities = array(
        "Italy" => "Rome",
        "Luxembourg" => "Luxembourg",
        "Belgium" => "Brussels",
        "Denmark" => "Copenhagen",
        "Finland" => "Helsinki",
        "France" => "Paris",
        "Slovakia" => "Bratislava",
        "Slovenia" => "Ljubljana",
        "Germany" => "Berlin",
        "Greece" => "Athens",
        "Ireland" => "Dublin",
        "Netherlands" => "Amsterdam",
        "Portugal" => "Lisbon",
        "Spain" => "Madrid"
    );

    foreach ($cities as $cities => $capital) {
        echo "<br>The capital of $cities is $capital <br>";
    };

    echo "<br><br><a href=Color.php><button>Back To Color</button></a>";

    echo "<a href=ColorArray.php><button>Next To Color Array</button></a><br><br>";

    echo "<a href=../../php_task/index.php><button>To Home Page</button></a>";
    ?>
</body>

</html>