<?php
$host="localhost";
$usr="root";
$password="";
$db="student";
$conn = new mysqli($host, $usr, $password,$db);
if ($conn->connect_error) {
    die("Connection failed::::::: " . $conn->connect_error);
} 
?>