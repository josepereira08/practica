<?php
namespace batalla;
// clase unidad--------------------------------------------------------------------------------------

class Unidad
{
	protected $hp = 40;
	protected $nombre ;
	protected $armadura ;
	protected $arma;


	function __construct($nombre,Arma $arma)
	{
		$this->nombre=$nombre;
		$this->arma=$arma;
	}

		public function setArmadura(Armadura $armadura = null)
	{
		$this->armadura=$armadura;
	}

	public function getNombre()
	{
		return $this->nombre;
	}

	public function getHp()
	{
		return $this->hp ;
	}

	protected function mover($direccion)
	{
		mostrar("$this->nombre avanza hacia $direccion");
	}

	public function ataca(unidad $oponente)
	{

		$atacar=$this->arma->creaAtaque();

		mostrar($atacar->getDescripcion($this,$oponente));

		$oponente->defensa($atacar);

	}

	public function defensa(Ataque $atacar)
	{

		$this->hp=$this->hp - $this->absorberDaño($atacar->getDaño());
		if ($this->hp<0) 
		{
			$this->hp=0;
		}

		mostrar("puntos de vida de {$this->nombre} es : {$this->hp}");

		if ($this->hp==0) 
		{
			$this->muere();
		}
	}

	public function muere()
	{
		mostrar("$this->nombre muere");
		exit();
	}
	
	public function absorberDaño($daño)
	{
		if ($this->armadura) 
		{
			$daño=$this->armadura->absorberDaño($daño);
		}
		return $daño;
	}
	
}