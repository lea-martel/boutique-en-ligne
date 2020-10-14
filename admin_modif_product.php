<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/css/fa.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/css/headerfooter.css">
    <title> Panel admin - Foo2Foot</title>
</head>
<?php include 'header.php' ?>
<body>
<?php

use Base\Profil;

$user = new Base\profil_utilisateurs();
$admin = new Base\Admin();
$product = new Base\product__cat();
$product = $product->setProduct();
if (!$user->isAdmin()) {
    header('location:index.php');
}
?>
<main>
    <form action="actionAdmin.php?user_id=<?= $product->id ?>" method="post" id="form" class="form form-ajax">
        <label for="image">Nouvelle image</label>
        <input type="image" name="image" id="image" value="<?= $product->image ?>" class="input">
        <label for="categorie_id">Modifier Catégorie</label>
        <input type="text" name="categorie_id" id="categorie_id" value="<?= $product->categorie_id?>" class="input">
        <label for="nom_produit">Nouveau nom de produit</label>
        <input type="text" name="nom_produit" id="nom_produit" value="<?= $product->nom_produit ?>" class="input">
        <label for="description">Nouvelle description</label>
        <input type="text" name="description" id="description" value="<?= $product->description ?>" class="input">
        <p>Quantité: <?= $product->quantite ?></p>
        <p>Taille: <?= $product->taille ?></p>
        <input type="hidden" name="type" value="modifAdminProduct" class="input">
        <button type="submit">Valider <i class="fas fa-check"></i></button>
    </form>
    <script src="script.js"></script>
</main>
</body>
<?php include 'footer.php'?>
</html>

