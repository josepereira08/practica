<?php

namespace Batalla\armaduras;
use Batalla\Armadura;
// clases ArmaduraBroce------------------------------------------------------------------



class ArmaduraBroce implements Armadura
{
	public function absorberDaño($daño)
	{
		return $daño/2;
	}	
}
