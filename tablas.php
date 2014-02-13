<?php
	echo 'Practica 3';
	echo "<br/>";
	echo 'Imprime en el navegador las tablas de multiplicar hasta el 12';

	$y;
	$i;
	
	for($i=1;$i<13;$i++){

		echo "<br/>";
		echo "Tabla del $i";
		echo "<br/>";

		for($y=1;$y<13;$y++){
			echo "$i X $y = ".$i*$y;
			echo "<br/>";
		}
		echo "<br/>";
		echo "<br/>";

	}
?>