<?php
/**
 * 
 */
class carro
{
	public $marca;
	private $modelo;
	
	function __construct($marca,$modelo)
	{
		$this->marca=$marca;
		$this->modelo=$modelo;
	}
	function mostrar(){
		return "Marca: $this->marca<br>modelo: $this->modelo<br><br>";
	}
}
	$carro1  = new carro('lamborghini','gallardo');
	$carro2 = new carro('ferrari','f448');

	if ($carro1->marca= 'Mclaren') {
		# code...
	}
	
	echo "{$carro1->mostrar()}  {$carro2->mostrar()}";
