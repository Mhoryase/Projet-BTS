<?php
    session_start();
    if ($_SESSION['username'] !== 'alan') {
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .image-container {
            display: flex;
            justify-content: space-around; /* Alignement équitable */
            flex-wrap: wrap; /* Permet aux images de passer à la ligne si nécessaire */
            gap: 20px; /* Espacement entre les images */
        }

        .image-container div {
            flex-basis: calc(50% - 10px); /* Moitié de la largeur du conteneur moins l'espacement */
        }

        .image-container img {
            max-width: 400px; /* Limite la la   rgeur des images */
            height: auto; /* Maintient le rapport hauteur/largeur */
        }

        .image-container p {
            text-align: center;
        }

    </style>
</head>
<body>
    <?php 
        include('header.php');
    ?>
    <div class="image-container">
        <div>
            <img src="https://file.bienici.com/photo/mki-52966_photo_immo-lead.com_appli_uploads_mediaprg_58_52966_eab03503e5a5.jpg?width=600&height=370&fit=cover" alt="Maison Annecy">  
            <p>A PARTIR DE 300 000€</p>
        </div>
        <div>
            <img src="https://www.terrasses-en-vue.com/photo/biens/1_T11194-1.jpg" alt="Maison Juvivisy">
            <p>A PARTIR DE 250 000€</p>
        </div>
        <div>
            <img src="https://www.castellas-immobilier.com/public/img/big/Ventes56e186020a443.jpg" alt="Maison Orly">
            <p>A PARTIR DE 200 000€</p>
        </div>
        <div>
            <img src="https://lh3.googleusercontent.com/FSYOz3e4TLmwcTU9FrW5lCstxWVWyQGyOA1cvfxh996VCCQxfJKKz272YvhFXj0fp5YT5Job5QbNtqeqR_N_VQUglgPa5tlB5j8GgA=rj-w388-h266-n-l70" alt="Maison Versailles">
            <p>A PARTIR DE 340 000€</p>
        </div>
    </div>
    <?php
        include('footer.php');
    ?>
</body>
</html> 