<?php

namespace jp\Armors;

use jp\Armor;
use jp\Attack;

class CursedArmor extends Armor
{
    public function absorbDamage(Attack $Attack)
    {
        return $attack->getDamage() * 2;
    }
}
