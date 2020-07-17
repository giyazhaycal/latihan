<!DOCTYPE html>
<html>
<head>
	<title>Nawadata 4.</title>
	<!-- reff: w3school -->
	<!-- Bootstrap cdn -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body style="background-color: gray">
	<div class="container p-5" style="background-color: white">
		<h1>4. Problem : I Am “The One” Number</h1>
		<hr>
		<!-- Form input -->
		<form method="POST">
			<div class="form-group">
				<label>The number of “The One” Number that you want to appear</label>
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
				<p>Set of “The One” number that start at 100, then searches until the input is requested.</p>

				<!-- Proses PHP -->
				<?php
					
					/* 
						
					
					*/
						$match = [];
						$num = $_POST['number'];
						for ($i=1; $i <=$num ; $i++) { 
							for ($j=100; $j < 1000 ; $j++) {

								if (hitung($j) && !in_array($j, $match)) {
									# code...
								 	array_push($match, $j);
									break; 
								}
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
				 			<?php echo $num ?>
				 		</td>
				 		<td>
				 			<?php 
				 				foreach ($match as $key => $value) {
				 					echo $value." is The one number <br>"; 
				 				}
				 			?>
				 			
				 		</td>
				 	</tr>
				 </table>

			</div>
		<?php endif ?>
	</div>

</body>
</html>

<?php 
function hitung($angka){

	$array = str_split($angka);

	$total =  0;
	foreach ($array as $key => $value) {
		$total += (int)$value * (int)$value;
	}

	if ($total < 10 && $total !=1) {
		return false;
	}elseif ($total > 11) {
		return hitung($total);
	}else{
		return true;
	}
} 



?>