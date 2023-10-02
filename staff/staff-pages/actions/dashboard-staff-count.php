<?php

$servername=$DB_HOST;
$uname=$DB_USER;
$pass=$DB_PASSWORD;
$db=$DB_DATABASE;

$conn=mysqli_connect($servername,$uname,$pass,$db);

if(!$conn){
    die("Connection Failed");
}

$sql = "SELECT * FROM staffs";
                $query = $conn->query($sql);

                echo "$query->num_rows";
?>