<!-- Dashboard -->
<div class="navbar navbar-inverse navbar-global navbar-fixed-top">
    <!-- Conteneur du site -->
    <div class="container-fluid">
        <!-- Haut de page -->
        <div class="navbar-header">
            <!-- Contenu du haut de page -->
            <a href="index.php?page=accueil">
                <div class="navbar-title">ARTOGETHER
            </a><span class="discover">Découverte des oeuvres graphiques en tout genre !</span><span class="artgraphique">Art
                Graphique</span>
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
    <!-- Bannière image skyline -->
    <img class="skyline" src="public/Medias/Skyline_ps.jpg" alt="image">
    <!-- Gallerie des oeuvres graphiques -->
    <div class="container-gallery">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                <!-- Image dynamique -->
                <img class="myImages dessin1" id="myImg" style="cursor:pointer" src="Admin/files/Girl neon.png">
                    <figcaption>
                        <!-- Description de l'oeuvre -->
                        <p class="description1">
                            <strong>Néon Girl</strong>, 2021
                            <br>
                            Photoshop
                            <br>
                            21 x 29,7 (A4)
                            <br>
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                <!-- Image dynamique -->
                <img class="myImages dessin2" id="myImg" style="cursor:pointer" src="Admin/files/Tiger_Samouraï.jpg">
                    <figcaption>
                        <!-- Description de l'oeuvre -->
                        <p class="description2">
                            <strong>Tiger Samouraï</strong>, 2021
                            <br>
                            Photoshop
                            <br>
                            21 x 29,7 (A4)
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                <!-- Image dynamique -->
                <img class="myImages dessin3" id="myImg" style="cursor:pointer" src="Admin/files/Logo-Pasquier-modern.jpg">
                    <figcaption>
                        <!-- Description de l'oeuvre -->
                        <p class="description3">
                            <strong>Modern Pasquier</strong>, 2021
                            <br>
                            Photoshop
                            <br>
                            21 x 29,7 (A4)
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                <!-- Image dynamique -->
                <img class="myImages dessin4" id="myImg" style="cursor:pointer" src="Admin/files/Yoshi Nike.png">
                    <figcaption>
                        <!-- Description de l'oeuvre -->
                        <p class="description4">
                            <strong>Yoshi Nike</strong>, 2021
                            <br>
                            Photoshop
                            <br>
                            21 x 29,7 (A4)
                            <br>
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                <!-- Image dynamique -->
                <img class="myImages dessin5" id="myImg" style="cursor:pointer" src="Admin/files/Red wolf blue girl0000.jpg">
                    <figcaption>
                        <!-- Description de l'oeuvre -->
                        <p class="description5">
                            <strong>Wolf-Girl</strong>, 2021
                            <br>
                            Photoshop
                            <br>
                            21 x 29,7 (A4)
                            <br>
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                <!-- Image dynamique -->
                <img class="myImages dessin6" id="myImg" style="cursor:pointer" src="Admin/files/LibertyRide0000.jpg">
                    <figcaption>
                        <!-- Description de l'oeuvre -->
                        <p class="description6">
                            <strong>Liberty Ride</strong>, 2021
                            <br>
                            Photoshop
                            <br>
                            21 x 29,7 (A4)
                            <br>
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                <!-- Image dynamique -->
                <img class="myImages dessin7" id="myImg" style="cursor:pointer" src="Admin/files/Black effect - Hamilton.png">
                    <figcaption>
                        <!-- Description de l'oeuvre -->
                        <p class="description7">
                            <strong>L.Hamilton</strong>, 2021
                            <br>
                            Photoshop
                            <br>
                            21 x 29,7 (A4)
                            <br>
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                <!-- Image dynamique -->
                <img class="myImages dessin8" id="myImg" style="cursor:pointer" src="Admin/files/Templar x wolf.png">
                    <figcaption>
                        <!-- Description de l'oeuvre -->
                        <p class="description8">
                            <strong>Templar x Wolf</strong>, 2021
                            <br>
                            Photoshop
                            <br>
                            21 x 29,7 (A4)
                            <br>
                        </p>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
    <!-- Accès à l'espace commentaire des oeuvres -->
    <div class="comment">
        <a href="#">
            <p class="commenText">Espace Commentaire</p>
            <div class="commenTwo">
                <p class="commenText2 glyphicon glyphicon-comment"></p>
            </div>
        </a>
    </div>
</div>

<!-- Script pour rendre les oeuvres dynamiques quand on clique dessus -->
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>


<script src="public/JS/oeuvrescript.js"></script>