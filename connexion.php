<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="styles/css/style.css">
    <title>Connexion</title>
</head>
<body>
<form action="action.php" id="form" class="form form-ajax" method="post">
<div class="form-control">
    <h1 class="titre">CONNEXION</h1>
        <label for="email">Email </label>
        <input type="email" id="email" name="email"  class="input">
    </div>
    <div class="form-control">
        <label for="password"> Mot de passe </label>
        <input type="password" id="password" name="password" class="input">
        <div class="error">
        </div>
    </div>
    <input type="hidden" name="type" value="connexion" class="input">
    <button type="submit">Se connecter</button>
</form>
<script src="script.js"></script>
</body>

</html>