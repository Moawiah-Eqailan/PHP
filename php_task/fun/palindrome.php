<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    function isPalindrome($str)
    {
        $cleanStr = strtolower(preg_replace("/[^A-Za-z]/", '', $str));

        $reversedStr = strrev($cleanStr);

        if ($cleanStr === $reversedStr) {
            return "Yes, it is a palindrome.";
        } else {
            return "No, it is not a palindrome.";
        }
    }

    $input = "Eva, can I see bees in a cave?";
    echo isPalindrome($input);



    echo "<br><br><br><a href=Armstrong.php><button>Back To Armstrong</button></a>";

    echo "<a href=removeDuplicates.php><button>Next To Remove Duplicates</button></a><br><br>";

    echo "<a href=../../php_task/index.php><button>To Home Page</button></a>";
    ?>

</body>

</html>