<?php

interface Vendible{

	public function getDescription();
	public function getPrecio();
}

abstract class Hamburguesa implements Vendible{

	public $tipo,$precio;

}

class Cuartel extends Hamburguesa{

	public function getDescription(){
		return "Hamburguesa Cuartel";
	}

	public function getPrecio(){
		return 7000;
	}
}

class TodoTerreno extends Hamburguesa{
	public function getDescription(){
		return "Hamburguesa Todo Terreno";
	}

	public function getPrecio(){
		return 10000;
	}
}

abstract class HamburguesaDecorator implements Vendible{

	public $vendible;

	public function __construct($vendible){
		$this->vendible=$vendible;
	}
}

class Tocineta extends HamburguesaDecorator{

	public function __construct($vendible){
		parent::__construct($vendible);
	}

	public function getDescription(){
		return $this->vendible->getDescription() . " con Tocineta";

	}

	public function getPrecio(){
		return $this->vendible->getPrecio() + 2000;
	}
}

class Queso extends HamburguesaDecorator{

	public function __construct($vendible){
		parent::__construct($vendible);
	}

	public function getDescription(){
		return $this->vendible->getDescription() . " con Queso";
	}

	public function getPrecio(){
		return $this->vendible->getPrecio() + 1000;
	}
}
class Cebolla extends HamburguesaDecorator{

	public function __construct($vendible){
		parent::__construct($vendible);
	}

	public function getDescription(){
		return $this->vendible->getDescription() . " con Cebolla";
	}

	public function getPrecio(){
		return $this->vendible->getPrecio() + 1500;
	}
}


?>