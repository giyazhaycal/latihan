<!DOCTYPE html>
<html>
<head>
	<title>Nawadata 3.</title>
	<!-- reff: w3school -->
	<!-- Bootstrap cdn -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body style="background-color: gray">
	<div class="container p-5" style="background-color: white">
		<h1>2. Problem : Sort Character</h1>
		<hr>
		<!-- Form input -->
		<form method="POST">
			<div class="form-group">
				<label>Enter one line of words (S).</label>
				<input type="text" name="text" class="form-control" required>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Process</button>
			</div>
		</form>
		<!-- cek menggunakan isset apakah form telah mengirim data number, -->
		<?php if ( isset($_POST['text'])): ?>

			<!-- jika ada, maka tampilkan output -->
			<h3>Output:</h3>
			<div class="jumbotron">
				<p>Contains vowel and consonant characters that has been sorted according to the following rules. <br>
					- Sort the letters in alphabetical order in the group. <br>
					- Separate between vowels and consonants. <br>
					- Process as lowercase letters (whitespaces are ignored)</p>

				<!-- Proses PHP -->
				<?php
					
					/* 
						Solusi, siapkan array penampung untuk vokal dan konsonan,
						pecahkan kata menjadi sebuah array menggunakan fungsi str_split(),
						loop dengan Foreach array hasil pecahan kata, 
						gunakan IF dengan kondisi cek dengan fungsi preg_match , 
						isi array penampung sesuai kondisi (vokal, konsonan),
						sort dengan fungsi sort()
						lalu tampilkan dengan impolde
					
					*/

					$vokal 		= [];
					$konsonan 	= [];
					$kata = str_split($_POST['text']);

					// loop sebanyak kata
					foreach ($kata as $key => $value) {
						// abaikan spasi
						if ($value != ' ') {
							
							// pisahkan vokal dan konsonan
							if (preg_match('/^[aeiou]/i', $value)) {
								// jika vokal, maka push data ke dalam array $vokal
								array_push($vokal, $value);
							}else{
								// jika konsonan, maka push data ke dalam array $konsonan
								array_push($konsonan, $value);
							}
						}
						
					}
					// urutkan dengan fungsi Sort
					sort($vokal);
					sort($konsonan);

					
				 ?>
				 <!-- tampilkan dalam tabel -->
				 <table class="table">
				 	<tr>
				 		<th>Input</th>
				 		<th>Output</th>
				 	</tr>
				 	<tr>
				 		<td>
				 			<?php echo $_POST['text'] ?>
				 		</td>
				 		<td>
				 			<?php echo implode(', ', $vokal) ?><br>
				 			<?php echo implode(', ', $konsonan) ?>
				 			
				 		</td>
				 	</tr>
				 </table>

			</div>
		<?php endif ?>
	</div>

</body>
</html>