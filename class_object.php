<?php

class Fish {
	public $common_name;
	public $flavour;
	public $record_weight;

	function __construct($name, $flavour, $record) {
		$this -> common_name = $name;
		$this -> flavour = $flavour;
		$this -> record_weight = $record;
	}

	public function getInfo() {
		echo $this -> common_name . " is an " . $this -> flavour . " flavored fish. The record weight is ". $this -> record_weight . ".";	
	}

}

$bass = new Fish("Largemouth Bass", "Excellent", "22 pounds 5 ounces");
$cod = new Fish("White Cod", "Beautiful", "34 pounds");

// echo $bass->getInfo();

?>

<html>
	<head>
		<header>Iwan Morgan</header>
	</head>
	<body>
		<h1>My Portfolio</h1>
		
			<p>This is some PHP:</p>
		<?php 

			echo $cod -> getInfo();

		?>
	</body>
</html>