<?php

namespace jp\Armors;

use jp\Armor;
use jp\Attack;

class MissingArmor extends Armor
{
    public function absorbDamage(Attack $attack)
    {
        return $attack->getDamage();
    }
}