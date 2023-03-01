<?php
	$firstName = "Janusz";
	$lastName = "Janeruszewski";
	echo "Imię i nazwisko: $firstName $lastName<br>";
	echo 'Imię i nazwisko: $firstName $lastName<br>';

	//phpstorm | VC
	//heredoc
	echo <<< DATA
		<hr>
		Imię: $firstName<br>
		Nazwisko: $lastName<br>
	DATA;
	
	$data = <<< DATA
		<hr>
		Imię: $firstName<br>
		Nazwisko: $lastName<br>
	DATA;
	echo $data;
	
	$data1 = <<< 'DATA'
	<hr>
		Imię: $firstName<br>
		Nazwisko: $lastName<br>
	DATA;
	echo $data1;
	
	$bin = 0b1010;
	echo $bin; //10
	
	$oct = 0101;
	echo $oct; //65
	
	$hex = 0x1A;
	echo $hex; //26
	
	echo PHP_VERSION; //7.4.2
	$x = 1;
	$y = 1.0;
	echo gettype($x); //integer
	echo gettype($y); //double
?>
	