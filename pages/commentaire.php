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
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"></button>
            <!-- Contenu du haut de page-->
            <a href="index.php?page=accueil">
                <div class="navbar-title">ARTOGETHER
            </a>
            <span class="slogan">Apprenons l'art de créer ensemble</span>
            <span class="create">Accueil Commentaire</span>
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
<br><br><br><br>

<table>
    <tr>
        <th>Titre de l'oeuvre</th>
        <th>Date de dernier commentaire</th>
        <th>Accès à l'espace commentaire</th>
    </tr>
    <?php foreach ($oeuvres as $oeuvre) : ?>
        <tr>
            <td style="font-family: 'Reem Kufi', sans-serif;"><?= $oeuvre['TITRE_OEUVRE'] ?></td>
            <td><time style="font-family: 'Reem Kufi', sans-serif; font-weight: 'bold';"><?= $oeuvre['DATE_CREATION_EC'] ?></time></td>
            <td><a style="font-family: 'Reem Kufi', sans-serif; font-weight: 'bold';" href="index.php?page=avisoeuvres.php?id=<?= $oeuvre['ID_OEUVRE'] ?>" class="btn btn-success">Lire la suite</a></td>
        </tr>
    <?php endforeach; ?>
</table>