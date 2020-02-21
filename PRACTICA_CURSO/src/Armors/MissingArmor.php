<?php

namespace War\Armors;

use War\Armor;
use War\Attack;

class MissingArmor extends Armor
{
    public function absorbDamage(Attack $attack)
    {
        return $attack->getDamage();
    }
}