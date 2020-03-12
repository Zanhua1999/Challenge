<?php

$content = $_POST['content']; 
$tijd = date("Y-m-d-H:i:sa");




$mysqli = new mysqli('localhost', 'root', 'root', 'bit_comments') or die ('Error connecting');
$query = "INSERT INTO comment VALUES (0,?,?)";
$stmt = $mysqli->prepare($query) or die ('Error preparing');
$stmt->bind_param('ss', $content, $tijd) or die ('Error bind param');
$stmt->execute() or die ('Error inserting comment in database');
$stmt->close();


header("location: main.php");
?>