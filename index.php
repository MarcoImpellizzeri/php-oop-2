<?php
require_once __DIR__ . '/classes/Prodotto.php';
require_once __DIR__ . '/classes/Cibo.php';
require_once __DIR__ . '/classes/Gioco.php';
require_once __DIR__ . '/classes/Cuccia.php';

$cibo1 = new Cibo('Purina', 'https://www.damoreno.ch/media/catalog/product/cache/5b5d7988e9af9f38308c6dd6deb78357/8/4/8410650216409_ckmijf8hzwpuycd0.jpg', '33.00 $' );
var_dump($cibo1);
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
        <div class="row row-cols-2">
            <div class="col">
                <div class="card">
                    <img src="" class="card-img-top" alt="image not found">
                    <div class="card-body">
                        <h2 class="card-title"></h2>
                        <p class="card-text">
                            
                        </p>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>