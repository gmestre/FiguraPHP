<?php
include_once('figura.php');
class circulo extends figura {

	private $radio;

	public function __construct(){
		parent::__construct();
		$this->radio = 0;
	}

	public function setRadio($newRadio){
		$this->radio = $newRadio;
	}

	public function getRadio(){
		return $this->radio;
	}

	public function desplazar($desX, $desY){
		$this->origen->desplazar($desX, $desY);
	}

	public function area(){
		return (3.1416 * $this->radio * $this->radio);
	}

	public function perimetro(){
		return (2 * 3.1416 * $this->radio);
	}

	public function escalar($cant){
		$this->radio *= $cant;
	}

	public function toString(){
		return 'Circulo  de radio ' . $this->radio . ', de area ' . $this->area() . ' y de perimetro' . $this->perimetro() . ' con origen: '.parent::toString().'</br>';
	}

}

?>
