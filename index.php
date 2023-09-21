<?php
require_once __DIR__ . '/classes/Prodotto.php';
require_once __DIR__ . '/db/array_cibi.php';
require_once __DIR__ . '/db/array_giochi.php';
require_once __DIR__ . '/db/array_cuccie.php';

$all_cibi = populateCibi();

$all_giochi = populateGiochi();

$all_cucce = populateCuccie();
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">

    <title>php-oop-2</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <!-- 
        Immaginare quali sono le classi necessarie per creare uno shop online 
        con le seguenti caratteristiche:

        - L’e-commerce vende prodotti per animali.
        - I prodotti sono categorizzati, le categorie sono Cani o Gatti.
        - I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

        Stampiamo delle card contenenti i dettagli dei 
        prodotti, come immagine, titolo, prezzo, icona della categoria 
        ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). 
    -->
    <div class="container py-5">
        <h1 class="text-center">ANIMAL LOVER</h1>
        <div class="container py-5">
            <h2>CIBO</h2>
            <div class="row row-cols-4">
                <?php foreach ($all_cibi as $cibo) { ?>
                    <div class="col">
                        <div class="card">
                            <img src="<?php echo $cibo->getImageProd(); ?>" class="card-img-top" alt="Immagine prodotto">
                            <div class="card-body">
                                <h2 class="card-title"><?php echo $cibo->getName(); ?></h2>
                                <p class="card-text">Prezzo: <?php echo $cibo->getPrice(); ?></p>
                                <p class="card-text">Tipo prodotto: <?php echo $cibo->getTypeProd(); ?></p>
                                <p class="card-text text-center">
                                    <?php if ($cibo->getSpecies() === 'cane') { ?>
                                        <i class="fa-solid fa-dog"></i>
                                    <?php } elseif ($cibo->getSpecies() === 'gatto') {?>
                                        <i class="fa-solid fa-cat"></i>
                                    <?php }?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <h2>GIOCHI</h2>
            <div class="row row-cols-4">
                <?php foreach ($all_giochi as $gioco) { ?>
                    <div class="col">
                        <div class="card">
                            <img src="<?php echo $gioco->getImageProd(); ?>" class="card-img-top" alt="Immagine prodotto">
                            <div class="card-body">
                                <h2 class="card-title"><?php echo $gioco->getName(); ?></h2>
                                <p class="card-text">Prezzo: <?php echo $gioco->getPrice(); ?></p>
                                <p class="card-text">Tipo prodotto: <?php echo $gioco->getTypeProd(); ?></p>
                                <p class="card-text text-center">
                                    <?php if ($gioco->getSpecies() === 'cane') { ?>
                                        <i class="fa-solid fa-dog"></i>
                                    <?php } elseif ($gioco->getSpecies() === 'gatto') {?>
                                        <i class="fa-solid fa-cat"></i>
                                    <?php }?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <h2>CUCCE</h2>
            <div class="row row-cols-4">
                <?php foreach ($all_cucce as $cuccia) { ?>
                    <div class="col">
                        <div class="card">
                            <img src="<?php echo $cuccia->getImageProd(); ?>" class="card-img-top" alt="Immagine prodotto">
                            <div class="card-body">
                                <h2 class="card-title"><?php echo $cuccia->getName(); ?></h2>
                                <p class="card-text">Prezzo: <?php echo $cuccia->getPrice(); ?></p>
                                <p class="card-text">Tipo prodotto: <?php echo $cuccia->getTypeProd(); ?></p>
                                <p class="card-text text-center">
                                    <?php if ($cuccia->getSpecies() === 'cane') { ?>
                                        <i class="fa-solid fa-dog"></i>
                                    <?php } elseif ($cuccia->getSpecies() === 'gatto') {?>
                                        <i class="fa-solid fa-cat"></i>
                                    <?php }?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>