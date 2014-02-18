<?php
	/*
	var_dump($_GET);

	$x= $_GET['num'];
	*/
	echo 'Practica 4';
	echo "<br/>";
	echo 'Imprime en el navegador las tablas de multiplicar hasta el 12';

	class multiplicar{ 

		public $num1;
		public $num2;


		function __construct(){

			$this->num1=10;
			$this->num2=12;

			if(isset($_GET['num1']))
				$this->num1 = $_GET['num1'];
			if(isset($_GET['num2']))
				$this->num2=$_GET['num2'];

		}
		
		function tabla(){

				$y;
				$i;

				for($i=1;$i<$this->num1+1;$i++){

					echo "<br/>";
					echo "Tabla del $i";
					echo "<br/>";

					for($y=1;$y<$this->num2+1;$y++){
						echo "$i X $y = ".$i*$y;
						echo "<br/>";
					}
					echo "<br/>";
					echo "<br/>";
				}
		}		
	}

	$hola = new multiplicar;
	$hola->tabla();
?>