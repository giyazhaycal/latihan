<?php 
	include 'connection/connect.php';

	$name = $_POST['name'];
	$last_name = $_POST['last_name'];
	$username = strtolower($_POST['name']).strtolower($_POST['last_name']);
	$dob = $_POST['dob'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$date= date('Y-m-d H:i:s');

	$sql = "INSERT INTO users (username, name, last_name, password, dob, created_at, updated_at)
		VALUES ('$username', '$name', '$last_name', '$password', '$dob', '$date', '$date')";

	if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

 ?>
