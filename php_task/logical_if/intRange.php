<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label>Enter Number btween (20 , 50) !</label>
        <br>
        <input type="number" name="number" id="number" required><br><br>
        <input type="submit"><br><br>
    </form>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num = $_POST['number'];

        
        
        if ($num >= 20 && $num <= 50) {
            echo "True :  $num is between 20 and 50.";
        } else {
            echo "False :  $num is not between 20 and 50.";
        }

        // switch ($num >= 20 && $num <= 50) {
        //     case '$i>=20':
        //         echo "True :  $num is between 20 and 50.";

        //         break;
        //     case '$i<=50':
        //         echo "True :  $num is between 20 and 50.";

        //         break;

        //     default:
        //         echo "False :  $num is not between 20 and 50.";

        //         break;
        // }
    }
    echo "<br><br><br><a href=multiple.php><button>Back To Multiple</button></a>";

    echo "<a href=largNum.php><button>Next To  Largest Number</button></a><br><br>";

    echo "<a href=../../php_task/index.php><button>To Home Page</button></a>";

    ?>
</body>

</html>