<!-- Page admin réservé uniquement à l'administrateur pouvant accéder aux différentes pages comme la plateforme de transfert d'oeuvre
et l'espace modération pour l'espace commentaire -->
<?php
if (!empty($_SESSION["is_administrateur"] == "Yes"))
{
// Contenu de la page
  echo('<div class="main-content">
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
            <button class="accueil" type="button"><a href="index.php?page=accueil">Retour à l\'accueil</a></button>
        </div>
        <img class="logo" src="public/Medias/LOGO OFFICIEL TRISTAN (Transparent).png">
    </div>
</div>');
}
else
{
//redirection via header();  
  header('Location: index.php?page=accesinterdit');
}
?>
