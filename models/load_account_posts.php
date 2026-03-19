<?php
include 'db/dbconnect.php';

$aid = $_SESSION['aid'];

$Sql = "SELECT * FROM post WHERE aid=$aid";

$result = $con->query($Sql);

while ($row= mysqli_fetch_assoc($result)){
    echo $row['content'];
    echo "</br>";
}
$con->close();  