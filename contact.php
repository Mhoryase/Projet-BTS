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
</head>
<body>
    <?php 
        include('header.php');
    ?>
      <div class="container">
    <h1>Nous Contacter</h1>
    <div class="contact-info">
      <p><strong>Nom de l'entreprise :</strong> Kabuto</p>
      <p><strong>Adresse :</strong> 12 rue de la soeur Rosalie, Paris, France</p>
      <p><strong>Téléphone :</strong> 01 23 45 67 89 (Lundi au vendredi de 9h à 17h)</p>
      <p><strong>Email : <a href="contact@kabuto.com">contact@kabuto.com</a>
      <p><strong>Instagram : <a href="https://www.instagram.com/">https://www.instagram.com</a>
      <p><strong>Twitter : <a href="https://twitter.com/?lang=fr">https://twitter.com/?lang=fr</a>
      <p><strong>Facebook : <a href="https://www.facebook.com/">https://www.facebook.com/</a>
    </div>
  </div>
    <?php
        include('footer.php');
    ?>
    
</body>
</html>