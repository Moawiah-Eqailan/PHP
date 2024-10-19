<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }

        td {
            border: 1px solid black;
            padding: 3px;
            text-align: center;
        }
    </style>
</head>
<body>

    <table cellpadding="3px" cellspacing="0px">
        <?php
        // Outer loop for columns (1 to 5)
        for ($col = 1; $col <= 5; $col++) {
            echo "<tr>";
            // Inner loop for rows (1 to 6)
            for ($row = 1; $row <= 6; $row++) {
                $result = $row * $col;
                echo "<td>$row * $col = $result</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>
