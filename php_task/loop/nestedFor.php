<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $start_char = 'A';

    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            if ($j < 5 - $i - 1) {
                echo "A "; 
            } else {
                echo chr(ord($start_char) + $i) . " ";
            }
        }
        echo "<br>"; 
    }
    ?>

</body>

</html>
