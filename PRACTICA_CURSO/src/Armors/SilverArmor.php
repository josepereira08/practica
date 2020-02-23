<?php

namespace jp\Armors;

use jp\Armor;
use jp\Attack;

class SilverArmor extends Armor
{
    public function absorbPhysicalDamage(Attack $attack)
    {
        return $attack->getDamage() / 3;
    }
}
