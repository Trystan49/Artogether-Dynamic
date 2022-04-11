<!-- Dashboard -->
<div class="navbar navbar-inverse navbar-global navbar-fixed-top">
    <!-- Conteneur du site -->
    <div class="container-fluid">
        <!-- Haut de page -->
        <div class="navbar-header">
            <!-- Contenu du haut de page -->
            <a href="index.php?page=accueil">
                <div class="navbar-title">ARTOGETHER
            </a><span class="discover">Besoin d'une nouvelle identité graphique ?</span><span class="home">Logo</span>
        </div>
    </div>
    <!-- Bouton icône qui renvoie à la page d'aide -->
    <div id="navbar" class="collapse navbar-collapse">
        <p class="navbar-right help">
            <a class="helpClick">
                Une question ? Besoin d'aide ?
                <br>
                Suivre l'actualité ?
            </a>
        </p>
        <p class="navbar-right help-icon">
            <a href="index.php?page=aide" class="glyphicon glyphicon-question-sign"></a>
        </p>
        <span class="navbar-right verticalBarre"></span>
    </div>
    </div>
</div>
<!-- Contenu -->
<div class="main-content">
    <!-- Bannière image driver -->
    <img class="driver" src="public/Medias/Japan driver.png" alt="image">
    <!-- Gallerie des logos -->
    <div class="container-gallery">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                <!-- Image dynamique -->    
                <img class="myImages dessin1" id="myImg" style="cursor:pointer" src="Admin/files/Dragon Squad.png">
                    <figcaption>
                        <!-- Description de l'oeuvre -->
                        <p class="description1">
                            <strong>Dragon Squad</strong>, 2021
                            <br>
                            Canva
                            <br>
                            225 x 225 pixels
                            <br>
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                <!-- Image dynamique -->
                <img class="myImages dessin2" id="myImg" style="cursor:pointer" src="Admin/files/LOGO OFFICIEL TRISTAN.png">
                    <figcaption>
                        <!-- Description de l'oeuvre -->
                        <p class="description2">
                            <strong>Logo Artogether</strong>, 2021
                            <br>
                            Photoshop
                            <br>
                            225 x 225 pixels
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                <!-- Image dynamique -->
                <img class="myImages dessin3" id="myImg" style="cursor:pointer" src="Admin/files/Planète logo.png">
                    <figcaption>
                        <!-- Description de l'oeuvre -->
                        <p class="description3">
                            <strong>Green_Planet</strong>, 2021
                            <br>
                            Photoshop
                            <br>
                            225 x 225 pixels
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                <!-- Image dynamique -->
                <img class="myImages dessin4" id="myImg" style="cursor:pointer" src="Admin/files/Logo Synthwave.png">
                    <figcaption>
                        <!-- Description de l'oeuvre -->
                        <p class="description4">
                            <strong>Synthwave</strong>, 2021
                            <br>
                            Photoshop
                            <br>
                            225 x 225 pixels
                            <br>
                        </p>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
    <!-- Explication et démarches pour les personnes interressées pour une nouvelle charte graphique -->
    <div class="explication">
        Besoin d'aide pour créer votre logo ou votre charte graphique ?
        <br>
        Pas de panique ! Artogether est là pour vous aider ! Quelque soit le thème ou la plateforme choisi, nous sommes
        là pour vous accompagner.
        <br>
        Un logo pour votre entreprise, pour vos réseaux sociaux ou encore pour vos plateformes de création comme
        Instagram, Youtube, Twitter, etc.
        <br>
        Des emotes pour vos abonnées Twitch ? Pas de problème, nous pouvons également vous aider.
        <br>
        Interressé ? Alors contacter par mail: <u>contact.artogether@gmail.com</u>
        <br>
        Ou remplisser le formulaire présent dans la page aide (?)
    </div>
</div>

<!-- Script pour rendre les oeuvres dynamiques quand on clique dessus -->
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>


<script src="public/JS/oeuvrescript.js"></script>