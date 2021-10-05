<?php

$conn = new mysqli('localhost', 'root', '', 'it_support');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>