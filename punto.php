<?php
class punto {
	private $X;
	private $Y;

	public function __construct(){
		$this->X=0;
		$this->Y=0;
	}

	public function setX($newX){
		$this->X = $newX;
	}

	public function setY($newY){
		$this->Y = $newY;
	}

	public function getX(){
		return $this->X;
	}

	public function getY(){
		return $this->Y;
	}

	public function desplazar($desX, $desY){
		$this->X += $desX;
		$this->Y += $desY;
	}

	public function distancia($point){
		$distancia = sqrt(pow($point->getX() - $this->X, 2) + pow($point->getY() - $this->Y, 2));
		return $distancia;
	}

	public function toString(){
		return 'punto en = Coordenada X: ' . $this->X . ' / Coordenada Y: ' . $this->Y . '</br>';
	}
}




?>
