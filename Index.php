<?php
session_start();
// Si clé username dans tableau $_SESSION existe et qu'elle est égal à alan alors on redirige dans dashboard.php
if (array_key_exists('username', $_SESSION) && $_SESSION['username'] === 'alan') {
    header('Location: dashboard.php');
} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Vérifiez les informations d'identification (utilisation de valeurs en dur pour les tests) 
    if ($username === 'alan' && $password === 'alan94') {
        $_SESSION['username'] = $username; 
        header('Location: dashboard.php'); 
        exit();
    } else {
        $error_message = 'Identifiants incorrects';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kabuto | Connexion</title>   
    <link rel="stylesheet" href="style.css"> 
    <style>
        .login-button {
            font-size: 30px; /* Définit la taille de la police à 20 pixels */
        }
    </style>
</head>
<body>
    <?php include('header_index.php') ;    
        ?>
    <center>
        <font size="10pt">
        <h2>Connexion</h2>
        <?php if (isset($error_message)) : ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
        <?php endif; ?>
        <form method="post" action="">
            <label for="username">Username:</label>
            <input type="text" name="username" required><br>
            <label for="password">Password:</label>
            <input type="password" name="password" required><br>
            <button type="submit" class="login-button">Login</button>
        </form>
        </font>
    </center>
</body>
</html>

