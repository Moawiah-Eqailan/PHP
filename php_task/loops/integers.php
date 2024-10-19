<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Integers</title>
</head>

<body>

    <?php
    $num = 30; 
    $total = 0; 

    for ($i = 1; $i <= $num; $i++) {
        echo $i," ";
        $total += $i; 
    }
    
    
    echo "<br><br>Total Number is : " . $total; 
    ?>

</body>

</html>
