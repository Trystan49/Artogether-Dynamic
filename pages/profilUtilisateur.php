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
            <span class="create">Modification profil</span>
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
<!-- formulaire permettant à l'utilisateur de modifier son profil -->
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-body">
                    <div class="row">
                        <h1 class="titlebis">Modification profil utilisateur</h1>
                        <div class="col-lg-12">
                            <form id="register-form" action="index.php?page=profilUtilisateurModif" method="post" role="form">
                                <div class="form-group pseudo">
                                    <input type="text" name="pseudo" id="pseudo" tabindex="1" class="form-control" placeholder="Pseudo" value="<?php if(isset($_POST['pseudo'])) { echo $_POST['pseudo']; } ?>">
                                </div>
                                <div class="form-group prenom">
                                    <input type="text" name="prenom" id="prenom" tabindex="1" class="form-control" placeholder="Prénom" value="<?php if(isset($_POST['prenom'])) { echo $_POST['prenom']; } ?>">
                                </div>
                                <div class="form-group nom">
                                    <input type="text" name="nom" id="nom" tabindex="1" class="form-control" placeholder="Nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>">
                                </div>
                                <div class="form-group mail">
                                    <input type="email" name="mail" id="mail" tabindex="1" class="form-control" placeholder="Mail" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>">
                                </div>
                                <div class="form-group motdepasse">
                                    <input type="password" name="motdepasse" id="motdepasse" tabindex="2" class="form-control" placeholder="Mot de passe">
                                </div>
                                <div class="form-group motdepasse">
                                    <input type="password" name="confirm-motdepasse" id="confirm-motdepasse" tabindex="2" class="form-control" placeholder="Confirmer mot de passe">
                                </div>
                                <div class="form-group">
                                    <div class="row justify-content-center">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input class="send" type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-secondary" value="Mettre à jour">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>