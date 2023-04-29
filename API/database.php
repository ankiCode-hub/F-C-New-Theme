<?php
header("Access-Control-Allow-Origin: http://127.0.0.1:5500");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$time=(60*10);
session_set_cookie_params($time); 
ini_set('session.gc_maxlifetime', $time); 
ini_set('session.cookie_lifetime', $time);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laravel";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>