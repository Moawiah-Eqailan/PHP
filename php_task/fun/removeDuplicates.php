<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function removeDuplicates($array) {
    $uniqueArray = array_unique($array);
    return $uniqueArray;
}

$array1 = array(2, 4, 7, 4, 8, 4);
$result = removeDuplicates($array1);

echo "Array after removing duplicates: <br>";
echo "<pre>";
print_r($result);
echo "</pre>";





echo "<br><br><br><a href=palindrome.php><button>Back To Palindrome</button></a>";

echo "<a href=primeNumber.php><button>Next To Prime Number</button></a><br><br>";

echo "<a href=../../php_task/index.php><button>To Home Page</button></a>";
?>

</body>
</html>