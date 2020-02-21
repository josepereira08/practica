<?php

namespace War;

require '../vendor/autoload.php';

Translator::set([

    'BasicBowAttack' => ':unit dispara una flecha :opponent',
    'BasicSwordAttack' => ':unit ataca con la espada a :opponent',
    'CrossBowAttack' => ':unit dispara una flecha a :opponent',
    'FireBowAttack' => ':unit dispara una flecha de fuego a :opponent',
]);

Log::setLogger(new HtmlLogger());


$luis = Unit::createSoldier()
            ->setWeapon(new Weapons\BasicSword())
            ->setArmor(new Armors\SilverArmor())
            ->setShield();



$jose = new Unit('jose', new Weapons\FireBow);

$jose->attack($luis);
$jose->attack($luis);
$luis->attack($jose);
