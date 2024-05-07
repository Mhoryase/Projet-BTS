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
    <center>
    <font size="10pt"><p><b><I>BIENVENUE !</I><br>Chez Kabuto, vous vous sentirez nouveau !</b></p></font>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdudg6zI5oejozrehnMIOe76yLNsNUUqylsR3YzY8vow&s" alt="Bienvenue">
    </center>
    <?php
        include('footer.php');
    ?>
</body>
</html>