<?php
include('./utils/db.php');
include('./models/oeuvrescommentaire.php');

$oeuvres = getOeuvresComments($pdo);

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
<br><br><br>

<h1>Oeuvres : </h1>

<?php foreach($oeuvres as $oeuvre): ?>
    <h2><?= $oeuvre['TITRE_OEUVRE'] ?></h2>
    <time><?= $oeuvre['DATE_CREATION_EC'] ?></time>
    <a href="index.php?page=avisoeuvres.php?id=<?= $oeuvre['ID_OEUVRE'] ?>">Lire la suite</a>
    <?php endforeach; ?>