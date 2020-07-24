<?php 
	include 'connection/connect.php';

	$id = $_GET['id'];

	$sql = "SELECT * FROM users where id=$id";

	$result = $conn->query($sql);
	var_dump($result);

	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
	}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Edit User</title>
</head>
<body>
	<div style="width: 80%; margin: auto; padding: 10px; ">
		<h1>Form Edit User</h1>

		<form method="POST" action="update.php">
			<input type="hidden" name="id" value="<?php echo $id ?>">
			<label>Name</label><br>
			<input type="text" name="name" value="<?php echo $row['name'] ?>"><br>

			<label>Last name</label><br>
			<input type="text" name="last_name" value="<?php echo $row['last_name'] ?>"><br>

			<label>Dob</label><br>
			<input type="date" name="dob" value="<?php echo $row['dob'] ?>"><br>

			<label>Password</label><br>
			<input type="password" name="password"><br>

			<label>Password Confirmation</label><br>
			<input type="password" name="password_confirmation"><br>

			<button type="submit">Simpan</button>
		</form>
	</div>
</body>