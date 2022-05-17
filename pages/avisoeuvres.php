<?php
if(!isset($_GET['ID_OEUVRE']) OR !is_numeric($_GET['ID_OEUVRE']))
    header('Location: index.php?page=commentaire');
else {
    extract($_GET);
    $idOeuvre = strip_tags($idOeuvre);

    require_once('./models/oeuvrescommentaire.php');

    $oeuvre = getOeuvre($idOeuvre);
}
?>

<div class="navbar navbar-inverse navbar-global navbar-fixed-top">
    <!-- Conteneur du site -->
    <div class="container-fluid">
        <!-- Haut de page -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                aria-expanded="false" aria-controls="navbar"></button>
            <!-- Contenu du haut de page-->
            <a href="index.php?page=accueil">
                <div class="navbar-title">ARTOGETHER
            </a>
            <span class="slogan">Apprenons l'art de créer ensemble</span>
            <span class="create">Espace commentaire</span>
            <span class="discover"><em>Bonne découverte !</em></span>
        </div>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
        <p class="navbar-right follow">
            Suivre Artogether
            <br>
            <a href="https://www.instagram.com/art_tristoune_49/" class="fa fa-instagram"></a>
            <a href="https://www.pinterest.fr/ART_Tristoune/_saved/" class="fa fa-pinterest"></a>
        </p>
    </div>
</div>
</div>

<h1><?= $oeuvre['ID_OEUVRE'] ?></h1>
<p><?= $oeuvre['CONTENU_OEUVRES'] ?></p>