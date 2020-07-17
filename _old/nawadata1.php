<!DOCTYPE html>
<html>
<head>
	<title>Nawadata 1.</title>
	<!-- reff: w3school -->
	<!-- Bootstrap cdn -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body style="background-color: gray">
	<div class="container p-5" style="background-color: white">
		<h1>1. Problem : Even Odd Numbers</h1>
		<small></small>
		<hr>
		<!-- Form input -->
		<form method="POST">
			<div class="form-group">
				<label>Enter one Positive Number</label>
				<input type="number" name="number" class="form-control" required>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Process</button>
			</div>
		</form>
		<!-- cek menggunakan isset apakah form telah mengirim data number, -->
		<?php if ( isset($_POST['number'])): ?>

			<!-- jika ada, maka tampilkan output -->
			<h3>Output:</h3>
			<div class="jumbotron">
				<p>Two rows of numbers, where the first line is a list of positive odd numbers that are smaller or equal to (N), and the second line is a list of positive numbers that are smaller or equal to (N).</p>

				<!-- Proses PHP -->
				<?php
					
					/* 
						Solusi, siapkan array penampung untuk ganjil dan genap,
						loop dengan For sebanyak (N) yang diinput, 
						gunakan IF dengan kondisi MODULUS , 
						isi array penampung sesuai kondisi (ganjil, genap),
						lalu tampilkan dengan impolde
					
					*/
					$number = $_POST['number'];
					// array penampung
					$ganjil = [];
					$genap = [];

					// loop sebanyak N kali
					for ($i=1; $i <= $number ; $i++) { 
						if ($i%2) {
							// jika sisa dari modulus = 1 ( dibaca true, maka push ke dalam array ganjl)
							array_push($ganjil, $i);
						}else{
							// jika sisa dari modulus = 0 ( bisa juga dibaca false, maka push ke dalam array genap)
							array_push($genap, $i);
						}
					}
				 ?>
				 <!-- tampilkan dalam tabel -->
				 <table class="table">
				 	<tr>
				 		<th>Input</th>
				 		<th>Output</th>
				 	</tr>
				 	<tr>
				 		<td>
				 			<?php echo $number ?>
				 		</td>
				 		<td>
				 			<?php echo implode(', ', $ganjil) ?><br>
				 			<?php echo implode(', ', $genap) ?>
				 			
				 		</td>
				 	</tr>
				 </table>

			</div>
		<?php endif ?>
	</div>

</body>
</html>