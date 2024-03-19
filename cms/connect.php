<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "Utsav!@#456";
$dbName = "cms";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if (!$conn) {
    die("Database Not Connected");
}
