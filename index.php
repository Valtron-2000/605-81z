<?php
require "dbconnect.php";
$result = $conn->query("SELECT *  FROM Novie") ;
echo "<h2>Фильмы</h2>";
while ($row = $result->fetch()) {
    echo $row['name']."<br>";

}