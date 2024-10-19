<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Simple Calculator</title>
    </head>

    <body>

        <form method="POST">
            <label for="num1">Enter First Number:</label><br>
            <input type="number" step="any" name="num1" required><br><br>

            <label for="num2">Enter Second Number:</label><br>
            <input type="number" step="any" name="num2" required><br><br>

            <label for="operation">Choose Operation:</label><br>
            <select name="operation" required>
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select><br><br>

            <input type="submit" value="=" style="font-size: 30px; width:50px ;"><br><br>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            $result = "";

            switch ($operation) {
                case 'add':
                    $result = $num1 + $num2;
                    echo "Result of Addition: $num1 + $num2 = $result";
                    break;
                case 'subtract':
                    $result = $num1 - $num2;
                    echo "Result of Subtraction: $num1 - $num2 = $result";
                    break;
                case 'multiply':
                    $result = $num1 * $num2;
                    echo "Result of Multiplication: $num1 * $num2 = $result";
                    break;
                case 'divide':
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                        echo "Result of Division: $num1 / $num2 = $result";
                    } else {
                        echo "Error: Division by zero is not allowed.";
                    }
                    break;
                default:
                    echo "Invalid operation selected.";
                    break;
            }
        };



        echo "<br><br><br><a href=calculate.php><button>Back To Calculate</button></a>";

        echo "<a href=minimumAge.php><button>Next To Minimum Age </button></a><br><br>";
    
        echo "<a href=../../php_task/index.php><button>To Home Page</button></a>";
    
    
        ?>

    </body>

    </html>

</body>

</html>