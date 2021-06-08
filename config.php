<?php 

$server = "localhost";
$dbuser = "root";
$dbpass = "";
$database = "insha";

$conn = mysqli_connect($server, $dbuser, $dbpass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

$base_url = "http://localhost/insha/"; // Website url

?>