<?php
    //if((!isset($_SESSION['IS_ADMINISTRATEUR']) && $_SESSION['IS_ADMINISTRATEUR'] == "Yes" )){
        //header("Location: admin.php");
    //}
    //else {
        //header("Location: accueil.php");
    //}
?>

<!-- Contenu -->
<div class="main-content">
    <div class="admin">
        <span class="title">ARTOGETHER</span>
        <br>
        <span class="titlebis">Espace Admin</span>
        <div class="champ">
            <button class="oeuvres" type="button"><a href="index.php?page=envoifichier">Téléchargement oeuvres</a></button>
        </div>
        <div class="champ">
            <button class="commentaire" type="button"><a href="">Administrateur commentaires</a></button>
        </div>
        <div class="champ">
            <button class="accueil" type="button"><a href="index.php?page=accueil">Retour à l'accueil</a></button>
        </div>
        <img class="logo" src="public/Medias/LOGO OFFICIEL TRISTAN (Transparent).png">
    </div>
</div>