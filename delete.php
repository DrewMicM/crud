<?php

$conn = new mysqli('localhost', 'root', '', 'crud');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$conn->query ("DELETE FROM crud WHERE id=$id");

header("Location: index.php");
?>
