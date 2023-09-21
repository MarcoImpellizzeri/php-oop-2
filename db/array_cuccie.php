<?php
require_once __DIR__ . '/../classes/Prodotto.php';
require_once __DIR__ . '/../classes/Cuccia.php';

function populateCuccie()
{
    $cuccie = [];

    $omlet = new Cibo();
    $omlet->setName('Omlet');
    $omlet->getName();
    $omlet->setImageProd('https://blog.omlet.it/wp-content/uploads/sites/2/2020/01/Eine-Franzosische-Bulldogge-auf-dem-Omlet-Hundenest-mit-dem-Motiv-%E2%80%98Pawsteps-Electric-950x633.jpg');
    $omlet->getImageProd();
    $omlet->setPrice('50.00 $');
    $omlet->getPrice();
    $omlet->setTypeProd('Cuccia');
    $omlet->getTypeProd();
    $omlet->setSpecies('cane');
    $omlet->getSpecies();
    $cuccie[] = $omlet;

    $tend = new Cibo();
    $tend->setName('Tend');
    $tend->getName();
    $tend->setImageProd('https://www.miglioridea.it/wp-content/uploads/2022/10/migliori-cucce-per-cani-un.jpg');
    $tend->getImageProd();
    $tend->setPrice('45.00 $');
    $tend->getPrice();
    $tend->setTypeProd('Cuccia');
    $tend->getTypeProd();
    $tend->setSpecies('cane');
    $tend->getSpecies();
    $cuccie[] = $tend;

    $miacara = new Cibo();
    $miacara->setName('Miacara');
    $miacara->getName();
    $miacara->setImageProd('https://home.isaproject.it/72189-mobile_large_default/cuccia-gatto-legno-anello.jpg');
    $miacara->getImageProd();
    $miacara->setPrice('60.00 $');
    $miacara->getPrice();
    $miacara->setTypeProd('Cuccia');
    $miacara->getTypeProd();
    $miacara->setSpecies('gatto');
    $miacara->getSpecies();
    $cuccie[] = $miacara;

    $gatto_comodo = new Cibo();
    $gatto_comodo->setName('Gatto Comodo');
    $gatto_comodo->getName();
    $gatto_comodo->setImageProd('https://www.tradeshopitalia.com/134563-large_default/cuccia-per-gatti-universale-a-meta-chiuso-con-morbido-cuscino-interno-tgm.jpg');
    $gatto_comodo->getImageProd();
    $gatto_comodo->setPrice('06.00 $');
    $gatto_comodo->getPrice();
    $gatto_comodo->setTypeProd('Cuccia');
    $gatto_comodo->getTypeProd();
    $gatto_comodo->setSpecies('gatto');
    $gatto_comodo->getSpecies();
    $cuccie[] = $gatto_comodo;

    return $cuccie;
}