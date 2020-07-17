<?php 

	$data = 10;

	$ganjil = [];
	$genap 	= [];

	for ($i=0; $i <= $angka; $i++) { 
		if ($i%2) {
			array_push($ganjil, $i);
		}else{
			array_push($genap, $i);
		}
	}

	echo "Ganjil: <br>";
	echo '<pre>'; print_r($ganjil); echo '</pre>';
	echo "Genap: <br>";
	echo '<pre>'; print_r($genap); echo '</pre>';
 ?>