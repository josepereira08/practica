<?php

namespace Batalla\armas;

use Batalla\arma;

class EspadaBasica extends Arma
{
	protected $nombreArma='Espada Basica';
	protected $daño=10;
	protected $descripcion=':unidad ataca con espada a :oponente';

	public function getNombreArma()
	{
		return $this->nombreArma;
	}
}