<?php
$sname = "localhost";
$unmae = "root";
$password = "";
$db_name = "nourish";
$conn = mysqli_connect($sname, $unmae, $password);

$createdb = "CREATE DATABASE IF NOT EXISTS " . $db_name;
$conn->query($createdb);
$conn = mysqli_connect($sname, $unmae, $password, $db_name);

$tblquery = "CREATE TABLE IF NOT EXISTS userdata (username VARCHAR(30) NOT NULL, email VARCHAR(30) NOT NULL, amount INT(10) NOT NULL)";
$conn->query($tblquery);

if (!$conn) {
    echo "Connection failed!";
}
?>