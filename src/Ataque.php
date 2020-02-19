<?php
namespace batalla;

class Ataque  
{
		protected $daño;
		protected $magico;
		protected $descripcion;
	
	function __construct($daño,$magico,$descripcion)
	{
		$this->daño=$daño;
		$this->magico=$magico;
		$this->descripcion=$descripcion;
	}
	public function getDescripcion(unidad $atacante, unidad $oponente)
	{
		return str_replace([':unidad',':oponente'], [$atacante->getNombre(),$oponente->getNombre()],$this->descripcion) ;
	}
	
	public function getDaño()
	{

		return $this->daño;
	}

	public function esMagico()
	{

		return $this->magico;
	}

	public function esFisico()
	{

		return ! $this->esMagico();
	}
	
}