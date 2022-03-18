<?php
if (!isset($_SESSION['pseudo'])){
    header('Location: index.php?page=authentif');
}
else {
    $pseudo = $_SESSION['pseudo'];
}
?>
<!-- Dashboard -->
<nav class="navbar navbar-inverse navbar-global navbar-fixed-top">
    <!-- Conteneur du site -->
    <div class="container-fluid">
        <!-- Haut de page -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Contenu du haut de page-->
            <a href="index.php?page=accueil">
                <div class="navbar-title">ARTOGETHER
            </a>
            <span class="slogan">Apprenons l'art de créer ensemble</span>
            <span class="create">Votre Profil</span>
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
</nav>
<div class="main-content">
    <!-- Affichage du profil de l'utilisateur avec les données de sa connexion au site -->
    <div class="profil">
        <img class="avatar" src="public/Medias/avatar_icon.png">
        <br><br>
        <span class="titlebis1">Profil</span>
        <br><br>
        <div align="center">
            <strong>Prénom :</strong>
            <?php echo $_SESSION["prenom"]; ?>
            <br><br>
            <strong>Nom :</strong>
            <?php echo $_SESSION["nom"]; ?>
            <br><br>
            <strong>Pseudo :</strong>
            <?php echo $_SESSION["pseudo"]; ?>
            <br><br>
            <strong>Mail :</strong>
            <?php echo $_SESSION["mail"]; ?>
        </div>
        <br>
        <!-- Bouton popup modification profil -->
        <button class="modif" type="button"><a class="aModif" href="#openModal">Modifier le profil</a></button>
        <br><br>
        <button class="accueil" type="button"><a class="aAccueil" href="index.php?page=accueil">Retour à l'accueil</a></button>
    </div>
    <div id="openModal" class="modalDialog">
        <div>
            <a href="#close" title="Close" class="close">X</a>
            <h1 class="titlebis2">Modification profil utilisateur</h1>
            <form id="register-form" action="index.php?page=profilUtilisateurModif" method="post" role="form">
                <div class="form-group pseudo">
                    <input type="text" name="pseudo" id="pseudo" tabindex="1" class="form-control" placeholder="Pseudo" value="<?php if(isset($_SESSION['pseudo'])) { echo $_SESSION['pseudo'];} ?>">
                </div>
                <div class="form-group prenom">
                    <input type="text" name="prenom" id="prenom" tabindex="1" class="form-control" placeholder="Prénom" value="<?php if(isset($_SESSION['prenom'])) { echo $_SESSION['prenom'];} ?>">
                </div>
                <div class="form-group nom">
                    <input type="text" name="nom" id="nom" tabindex="1" class="form-control" placeholder="Nom" value="<?php if(isset($_SESSION['nom'])) { echo $_SESSION['nom'];} ?>">
                </div>
                <div class="form-group mail">
                    <input type="email" name="mail" id="mail" tabindex="1" class="form-control" placeholder="Mail" value="<?php if(isset($_SESSION['mail'])) { echo $_SESSION['mail'];} ?>">
                </div>
                <div class="form-group motdepasse">
                    <input type="password" name="motdepasse" id="motdepasse" tabindex="2" class="form-control"
                        placeholder="Mot de passe">
                </div>
                <div class="form-group motdepasse">
                    <input type="password" name="confirm-motdepasse" onchange="confirmPwd()" id="confirm-motdepasse"
                        tabindex="2" class="form-control" placeholder="Confirmer mot de passe">
                </div>
                <div class="form-group">
                    <br>
                    <div class="row justify-content-center">
                        <input class="send" type="submit" name="register-submit" id="register-submit" tabindex="4"
                        class="form-control btn btn-secondary" value="Mettre à jour">
                    </div>
                </div>
            </form>
            <?php 
            /* if (isset($msg)) {
                echo $msg;
            } */
            ?>
        </div>
    </div>

</div>
<a href="#close" title="Close" class="close">x</a>
</div>
</div>

<!-- formulaire permettant à l\'utilisateur de modifier son profil -->

<script>
function confirmPwd() {
    const pwd = document.getElementById('motdepasse');
    const pwdConfirm = document.getElementById('confirm-motdepasse');
    if (pwd.value != pwdConfirm.value) {
        pwdConfirm.validity.valid = "false";
        pwdConfirm.setCustomValidity("Saisir le même mot de passe");
    } else {
        pwdConfirm.validity.valid = "true";
        pwdConfirm.setCustomValidity("");
    }
}
</script>