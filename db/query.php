<?php
include "./connect.php";

$sql = "SELECT * FROM `db`";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<br> ID: " . $row["user_id"] . "<br> Name: " . $row["user_name"] . "<br> Email: " . $row["user_email"]
        ."<br> Passorwd: " .$row["password"]."<br>" ;
    }
} else {
    echo " No information";
}




// $sql = "SELECT * FROM users";
// $users = $dbConnection->query($sql);


// echo "<ul>";
// foreach ($users as $user) {
//     echo "<li> User Name: " . $user["user_name"] . "<br> user Email" . $user["user_email"] . "</li>";
// }
// echo "</ul>";
