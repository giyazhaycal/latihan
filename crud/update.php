<?php 
	include 'connection/connect.php';

	$name = $_POST['name'];
	$id = $_POST['id'];
	$last_name = $_POST['last_name'];
	$username = strtolower($_POST['name']).strtolower($_POST['last_name']);
	$dob = $_POST['dob'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$date= date('Y-m-d H:i:s');

	$sql = "UPDATE INTO users (username, name, last_name, password, dob, created_at, updated_at)
		VALUES ('$username', '$name', '$last_name', '$password', '$dob', '$date', '$date')";

	$sql = "UPDATE users SET username='$username', name='$name', last_name='$last_name', password='$password', dob='$dob', updated_at='$date'  WHERE id=$id";

	if ($conn->query($sql) === TRUE) {
	  echo "Record updated successfully";
	} else {
	  echo "Error updating record: " . $conn->error;
	}

	$conn->close();

 ?>
