<?php

namespace Batalla;

require '../verdor/autoload.php';

$armaduraB=new armaduras\ArmaduraBroce();
$armaduraA=new armaduras\ArmadurAgilidad();

$espadaBasica=new armas\EspadaBasica();
$arcoBosico=new armas\ArcoBasico();

$luis = new Unidad ('Luis',$espadaBasica);
$jose = new Unidad ('José',$arcoBosico);
//$unidad->mover('el norte');

$jose->ataca($luis);
$luis->setArmadura($armaduraB);
$jose->ataca($luis);
$jose->setArmadura($armaduraA);
$luis->ataca($jose);