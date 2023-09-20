<?php
require_once __DIR__ . '/classes/Prodotto.php';
require_once __DIR__ . '/classes/Cibo.php';

function populateCibi()
{
    $cibi = [];

    $ultima_salmon = new Cibo();
    $ultima_salmon->setName('Ultima');
    $ultima_salmon->getName();
    $ultima_salmon->setImageProd('https://www.damoreno.ch/media/catalog/product/cache/5b5d7988e9af9f38308c6dd6deb78357/8/4/8410650216409_ckmijf8hzwpuycd0.jpg');
    $ultima_salmon->getImageProd();
    $ultima_salmon->setPrice('33.00 $');
    $ultima_salmon->getPrice();
    $ultima_salmon->setTypeProd('Cibo');
    $ultima_salmon->getTypeProd();
    $ultima_salmon->setSpecies('cane');
    $ultima_salmon->getSpecies();
    $cibi[] = $ultima_salmon;

    $special_dog = new Cibo();
    $special_dog->setName('Special Dog');
    $special_dog->getName();
    $special_dog->setImageProd('https://www.tigota.it/media/catalog/product/b/i/big_347850_842562_01_7jsttlbicxqwywyd.jpg');
    $special_dog->getImageProd();
    $special_dog->setPrice('45.00 $');
    $special_dog->getPrice();
    $special_dog->setTypeProd('Cibo');
    $special_dog->getTypeProd();
    $special_dog->setSpecies('cane');
    $special_dog->getSpecies();
    $cibi[] = $special_dog;

    $crancy = new Cibo();
    $crancy->setName('Crancy');
    $crancy->getName();
    $crancy->setImageProd('https://www.ciotolefelici.it/images/CrancySnackricco-2kg-cibo-gatto.jpg');
    $crancy->getImageProd();
    $crancy->setPrice('40.00 $');
    $crancy->getPrice();
    $crancy->setTypeProd('Cibo');
    $crancy->getTypeProd();
    $crancy->setSpecies('gatto');
    $crancy->getSpecies();
    $cibi[] = $crancy;

    $premiere = new Cibo();
    $premiere->setName('Premiere');
    $premiere->getName();
    $premiere->setImageProd('https://arcaplanet.vtexassets.com/arquivos/ids/274684/premiere-meat-menu-per-gatto-adult-con-pollame-300g.jpg?v=1781017297');
    $premiere->getImageProd();
    $premiere->setPrice('06.00 $');
    $premiere->getPrice();
    $premiere->setTypeProd('Cibo');
    $premiere->getTypeProd();
    $premiere->setSpecies('gatto');
    $premiere->getSpecies();
    $cibi[] = $premiere;

    return $cibi;
}
