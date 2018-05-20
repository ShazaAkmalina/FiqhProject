<?php

include("dbase.php");
	
	$id = $_POST['id'];
	$category = $_POST['kategori'];
	$scholar = $_POST['ilmuan'];
	$question = $_POST['comment'];

$query = "INSERT INTO list(category,scholar,question) VALUES ('$category','$scholar','$question')";
$result = mysqli_query($conn, $query) or die ("Could not execute query in insertquestion.php");
if($result) {
	echo "<script type='text/javascript'> window.location='userlist.php' </script>";
}
?>