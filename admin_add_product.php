<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
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
    <link rel="stylesheet" href="styles/css/admin.css">

    <title> Panel admin - Foo2Foot</title>
</head>
<body>

<?php include 'header.php'?>
<?php

use Base\Profil;

$user = new Base\profil_utilisateurs();
$admin = new Base\Admin();
$product = new Base\product__cat();

if (!$user->isAdmin()) {
    header('location:index.php');
}
?>
<main>
    <div class="container">
        <h1 class="title"> Formulaire produit</h1>
        <form action="actionAdmin.php" id="form" class="form form-ajax" method="post" enctype="multipart/form-data">
                <div class="form-article">
                <label for="categorie">Catégorie</label> <br/>
                <input type="text" id="categorie" name="categorie" class="input">
                </div>
                    <div class="form-article">
                        <label for="nom">Nom</label> <br/>
                        <input type="text" id="nom_produit" name="nom_produit" class="input">
            </div>
            <div class="form-article">
                <label for="image">Image</label> <br/>
                <input type="file" id="image" name="image"  class="input">
            </div>
            <div class="form-article">
                <label for="descripiton">Description du produit</label> <br/>
                <input type="text" id="description" name="description"  class="input">
            </div>
            <div class="form-article">
                <label for="taille">Taille du produit</label> <br/>
                <select name="taille"  class="input">
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                </select><br/>
            </div>
            <div class="form-article">
                <label for="prix">Prix</label> <br/>
                <input type="text" id="prix" name="prix"  class="input">
            </div>
            <div class="form-article">
                <label for="quantite">Quantité</label> <br/>
                <input type="text" id="quantite" name="quantite"  class="input">
            </div>
            <input type="hidden" value="addproduct" name="type">
            <button type="submit">Envoyer</button>
        </div>
    </form>
</main>
<?php include 'footer.php' ?>
</body>

</html>