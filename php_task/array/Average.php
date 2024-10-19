<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php


$array = array( 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 
65, 64, 68, 73, 75, 79, 73);

$total = 0;
foreach($array as $temp){
    $total += $temp;
}

$average=$total/count($array);
echo " <br> Average Temperature is: $average <br>";

sort($array);
$lowest = array_slice($array,0, 5);
echo "<br> List of seven lowest temperatures: " . implode(" , ", $lowest) . "<br><br>";

asort($array);
$highest = array_slice($array, -5);
echo "List of seven highest temperatures: " . implode(" , ", $highest) . "<br>";



echo "<br><br><a href=NumAscend.PHP><button>Back To Num Ascend</button></a>";

echo "<a href=merge.php><button>Next To Merge </button></a><br><br>";

echo "<a href=../../php_task/index.php><button>To Home Page</button></a>";
?>




</body>
</html>