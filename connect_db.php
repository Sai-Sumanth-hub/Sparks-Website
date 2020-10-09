<?php 

$host = "localhost";
$user = "sumanth";
$pwd = "dbms_mysql";
$db = "mydb";

$conn = new mysqli($host, $user, $pwd, $db);

if ($conn->connect_error) {
    echo "<br>Connection Failed<br>";
    echo "Error Message : ".$conn->connect_error."<br>";
    die();
}

?>