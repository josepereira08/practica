<?php
namespace Batalla;

abstract class Arma
{
	protected $daño = 0;
	protected $magico = false;
	protected $descripcion=':unidad ataca a :oponente';

	public function creaAtaque()
	{
		return new Ataque($this->daño,$this->magico,$this->descripcion);
	}

	
}