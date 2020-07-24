
<!DOCTYPE html>
<html>
<head>
	<title>Halaman List User</title>
</head>
<body>
	<div style="width: 80%; margin: auto; padding: 10px; ">
		<h1>Form Input User</h1>

		<form method="POST" action="simpan.php">
			<label>Name</label><br>
			<input type="text" name="name"><br>

			<label>Last name</label><br>
			<input type="text" name="last_name"><br>

			<label>Dob</label><br>
			<input type="date" name="dob"><br>

			<label>Password</label><br>
			<input type="password" name="password"><br>

			<label>Password Confirmation</label><br>
			<input type="password" name="password_confirmation"><br>

			<button type="submit">Simpan</button>
		</form>
	</div>
</body>