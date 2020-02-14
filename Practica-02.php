<?php

function mostrar($mensaje)
{
echo "<p>{$mensaje}</p>";
}

// clase unidad--------------------------------------------------------------------------------------

abstract class Unidad
{
	protected $hp = 40;
	protected $nombre ;


	function __construct($nombre)
	{
		$this->nombre=$nombre;
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

	abstract public function ataca(unidad $oponente,Arma $arma);
	
	public function defensa($daño)
	{

		$this->hp=$this->hp - $this->absorberDaño($daño);
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

	protected function absorberDaño($daño)
	{
		return $daño;
	}
}




//interfaces-------------------------------------------------------------------------
interface Armadura
{
	public function absorberDaño($daño);
}




// clases Arma----------------------------------------------------------------------
class Arma
{
	protected $nombreArma;
	protected $daño;

	function __construct($nombreArma,$daño)
	{
		$this->nombreArma=$nombreArma;
		$this->daño=$daño;
	}

	public function getNombreArma()
	{
		return $this->nombreArma;
	}

	public function getDaño()
	{
		return $this->daño;
	}


}




// clases Armaduras------------------------------------------------------------------



class ArmaduraBroce implements Armadura
{
	public function absorberDaño($daño)
	{
		return $daño/2;
	}	
}



class ArmadurAgilidad implements Armadura
{
	public function absorberDaño($daño)
	{
		if (rand(0,1)==0)
		{
			$daño=0;
		}else{
			$daño=$daño*2;
		}
		return $daño;
	}	

}



// clase soldado--------------------------------------------------------------------------------------

class Soldado extends unidad
{
	protected $daño=40;
	protected $armadura;
	

	public function setArmadura(Armadura $armadura = null)
	{
		$this->armadura=$armadura;
	}


	public function ataca(unidad $oponente,Arma $arma)
	{
		mostrar("{$this->nombre} ataca con {$arma->getNombreArma()} a {$oponente->getNombre()}");

		$oponente->defensa($arma->getDaño());
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





// clase arquero--------------------------------------------------------------------------------------

class Arquero extends unidad
{
	protected $daño = 20;

	public function setArmadura(Armadura $armadura = null)
	{
		$this->armadura=$armadura;
	}

	public function ataca(unidad $oponente,Arma $arma)
	{

	mostrar("{$this->nombre} ataca con {$arma->getNombreArma()} a {$oponente->getNombre()}");

	$oponente->defensa($arma->getDaño());

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


$armaduraB=new ArmaduraBroce();
$armaduraA=new ArmadurAgilidad();

$espada = new Arma ('espada',30);
$ballesta = new Arma ('ballesta',30);

$luis = new Soldado ('luis');
$jose = new Arquero ('jose');
//$unidad->mover('el norte');
$jose->ataca($luis,$ballesta);
$luis->setArmadura($armaduraB);
$jose->ataca($luis,$espada);
$jose->setArmadura($armaduraA);
$luis->ataca($jose,$espada);