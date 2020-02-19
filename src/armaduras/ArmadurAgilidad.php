<?php

namespace Batalla\armaduras;
use Batalla\Armadura;

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

