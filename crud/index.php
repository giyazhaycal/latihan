<?php include 'connection/connect.php'; ?>

<?php 
	$sql = "SELECT * FROM users";
	$result = $conn->query($sql);
	
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman List User</title>
</head>
<body>
	<div style="width: 80%; margin: auto; padding: 10px; ">
		<h1>List User <a href="form-add.php">Tambah Baru</a></h1>
		<table width="100%" style="border: 1px solid black">
			<thead>
				<tr >
					<th style="border: 1px solid black">No</th>
					<th style="border: 1px solid black">Nama</th>
					<th style="border: 1px solid black">User Name</th>
					<th style="border: 1px solid black">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while($row = $result->fetch_assoc() ) {
					echo "<tr>";
					echo "	<td style='border: 1px solid black'>#</td>";
					echo "	<td style='border: 1px solid black'>".$row['name'].' '.$row['last_name']."</td>";
					echo "	<td style='border: 1px solid black'>".$row['username']."</td>";
					echo "	<td style='border: 1px solid black'><a href='edit.php?id=".$row['id']."'>Edit</a></td>";
					echo "</tr>";

				 }

				 $conn->close();

				 ?>

			</tbody>
		</table>
		
	</div>
</body>
</html>


<!-- 

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc() ) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close(); -->