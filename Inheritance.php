<?php 

class Product {
	public $name = 'default_name';
	public $price = 0;
	public $desc = 'defualt description';

	function __construct($name, $price, $desc) {
		$this -> name = $name;
		$this -> price = $price;
		$this -> desc = $desc;
	}

	public function getInfo() {
		return "Product name: " . $this -> name;
	}
}

class Soda extends Product {

	public $flavour;

	public function getInfo() {
		return "<strong>Product Name: </strong>". $this->name . " <strong>Flavour: </strong>". $this->flavour;
	}

	function __construct($name, $price, $desc, $flavour) {
		parent:: __construct($name, $price, $desc);
		$this -> flavour = $flavour;
	}
}

$shirt = new Product("Animal T-Shirt", 20, "Blue T-Shirt with Animal logo on front");
$soda = new Soda("Coca-Cola", 1.50, "Legendery cola drink", "Caramel (cola)");

function info($item) {
	echo $item->getInfo() . "<br/>";
}

info($shirt);
info($soda);
?>