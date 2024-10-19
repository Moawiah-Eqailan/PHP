<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table id="table" border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        <tr>
            <td><?php echo $_POST["name"]; ?></td>
            <td><?php echo $_POST["email"]; ?></td>
            <td><?php echo $_POST["password"]; ?></td>
        </tr>
    </table><br><br>
    <button id="btn">Hide</button>
</body>
<script>
    document.getElementById("btn").addEventListener("click", function() {
        var table = document.getElementById("table");
        if (table.style.display === "none") {
            table.style.display = "table";
            document.getElementById("btn").textContent = "Hide";
        } else {
            table.style.display = "none";
            document.getElementById("btn").textContent = "Show";
        }
    });
</script>

</html>