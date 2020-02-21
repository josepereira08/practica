<?php

namespace War\Armors;

use War\Armor;
use War\Attack;

class CursedArmor extends Armor
{
    public function absorbDamage(Attack $Attack)
    {
        return $attack->getDamage() * 2;
    }
}
