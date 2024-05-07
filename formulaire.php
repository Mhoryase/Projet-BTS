<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Satisfaction</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="radio"] {
            margin-right: 5px;
        }
        textarea {
            width: 100%;
            height: 100px;
            margin-bottom: 10px;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Formulaire de Satisfaction</h2>
        <form id="satisfactionForm">
            <label for="rating">Notez votre expérience :</label>
            <input type="radio" name="rating" value="5"> 5
            <input type="radio" name="rating" value="4"> 4
            <input type="radio" name="rating" value="3"> 3
            <input type="radio" name="rating" value="2"> 2
            <input type="radio" name="rating" value="1"> 1
            <br>
            <label for="comment">Commentaire :</label>
            <textarea name="comment" id="comment" placeholder="Saisissez votre commentaire ici"></textarea>
            <button type="submit">Envoyer</button>
        </form>
    </div>

    <script>
        document.getElementById('satisfactionForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Empêche l'envoi du formulaire par défaut
            
            // Récupération des valeurs du formulaire
            var rating = document.querySelector('input[name="rating"]:checked').value;
            var comment = document.getElementById('comment').value;
            
            // Validation des données (vous pouvez ajouter plus de validations si nécessaire)
            if (!rating || !comment) {
                alert('Veuillez sélectionner une note et saisir un commentaire.');
                return;
            }
            
            // Envoi des données (simulation ici)
            alert('Merci pour votre retour ! Note : ' + rating + ', Commentaire : ' + comment);
            
            // Réinitialisation du formulaire
            document.getElementById('satisfactionForm').reset();

            window.location.href = "http://localhost/projet_dev/index.php";
        });
    </script>
</body>
</html>
