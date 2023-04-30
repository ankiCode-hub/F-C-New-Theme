<?php
header("Access-Control-Allow-Origin: http://127.0.0.1:5500");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$time=(60*20);
session_set_cookie_params($time); 
ini_set('session.gc_maxlifetime', $time); 
ini_set('session.cookie_lifetime', $time);


// $servername = "sql959.main-hosting.eu";
// $username = "u265166660_ritik_remote";
// $password = "Ahmedabad@123";
// $dbname = "u265166660_test";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laravel";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>