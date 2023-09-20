<?php
require_once __DIR__ . '/classes/Prodotto.php';
require_once __DIR__ . '/classes/Gioco.php';

function populateGiochi()
{
    $giochi = [];

    $nerf_dog = new Gioco();
    $nerf_dog->setName('Nerf Dog');
    $nerf_dog->getName();
    $nerf_dog->setImageProd('https://www.globalpet.it/4304-medium_default/nerf-gioco-cane-disco-tpr-ultraresistente.jpg');
    $nerf_dog->getImageProd();
    $nerf_dog->setPrice('20.00 $');
    $nerf_dog->getPrice();
    $nerf_dog->setTypeProd('Gioco');
    $nerf_dog->getTypeProd();
    $nerf_dog->setSpecies('cane');
    $nerf_dog->getSpecies();
    $giochi[] = $nerf_dog;

    $kong_dog = new Gioco();
    $kong_dog->setName('Kong Dog');
    $kong_dog->getName();
    $kong_dog->setImageProd('https://staticfanpage.akamaized.net/wp-content/uploads/sites/5/2020/04/1.jpg');
    $kong_dog->getImageProd();
    $kong_dog->setPrice('10.00 $');
    $kong_dog->getPrice();
    $kong_dog->setTypeProd('Gioco');
    $kong_dog->getTypeProd();
    $kong_dog->setSpecies('cane');
    $kong_dog->getSpecies();
    $giochi[] = $kong_dog;

    $camon = new Gioco();
    $camon->setName('Camon');
    $camon->getName();
    $camon->setImageProd('https://www.agrizoo2.it/wp-content/uploads/2021/02/AG038.jpg');
    $camon->getImageProd();
    $camon->setPrice('40.00 $');
    $camon->getPrice();
    $camon->setTypeProd('Gioco');
    $camon->getTypeProd();
    $camon->setSpecies('gatto');
    $camon->getSpecies();
    $giochi[] = $camon;

    $kong_cat = new Gioco();
    $kong_cat->setName('Kong Cat');
    $kong_cat->getName();
    $kong_cat->setImageProd('https://www.naturepetshop.it/wp-content/uploads/kong-connect-gioco-gatto.jpg');
    $kong_cat->getImageProd();
    $kong_cat->setPrice('15.00 $');
    $kong_cat->getPrice();
    $kong_cat->setTypeProd('Gioco');
    $kong_cat->getTypeProd();
    $kong_cat->setSpecies('gatto');
    $kong_cat->getSpecies();
    $giochi[] = $kong_cat;

    return $giochi;
}