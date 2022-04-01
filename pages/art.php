<!-- Dashboard -->
<div class="navbar navbar-inverse navbar-global navbar-fixed-top">
    <!-- Conteneur du site -->
    <div class="container-fluid">
        <!-- Haut de page -->
        <div class="navbar-header">
            <!-- Contenu du haut de page -->
            <a href="index.php?page=accueil">
                <div class="navbar-title">ARTOGETHER
            </a><span class="discover">Découverte des oeuvres en tout genre !</span><span class="home">Art</span>
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
    <!-- Bannière image ours -->
    <img class="space" src="./public/Medias/space official_ps.jpg" alt="image">
    <!-- Gallerie avec toutes les oeuvres d'art -->
    <div class="container-gallery">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                    <!-- Image dynamique -->
                    <img class="myImages dessin1" id="myImg" style="cursor:pointer" src="Admin/files/F1JP.jpg">
                    <figcaption>
                        <!-- Description de l'oeuvre -->
                        <p class="description1">
                            <strong>Formula Japan</strong>, 2021
                            <br>
                            Crayon de couleur, feutre
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
                <img class="myImages dessin2" id="myImg" style="cursor:pointer" src="Admin/files/Samus.jpg">
                    <figcaption>
                        <!-- Description de l'oeuvre -->
                        <p class="description2">
                            <strong>Samus</strong>, 2021
                            <br>
                            Crayon de couleur, feutre
                            <br>
                            21 x 29,7 (A4)
                        </p>
                    </figcaption>
                </figure>
                
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                <!-- Image dynamique -->
                <img class="myImages dessin3" id="myImg" style="cursor:pointer" src="Admin/files/NL.jpg">    
                    <figcaption>
                        <!-- Description de l'oeuvre -->
                        <p class="description3">
                            <strong>Nicki Lauda</strong>, 2021
                            <br>
                            Crayon de couleur, feutre
                            <br>
                            21 x 29,7 (A4)
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <figure>
                <!-- Image dynamique -->
                <img class="myImages dessin4" id="myImg" style="cursor:pointer" src="Admin/files/Chevalier.jpg">
                    <figcaption>
                        <!-- Description de l'oeuvre -->
                        <p class="description4">
                            <strong>Casque Chevalier</strong>, 2021
                            <br>
                            Crayon de papier, feutre
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
                <img class="myImages dessin5" id="myImg" style="cursor:pointer" src="Admin/files/Bmw.jpg">
                    <figcaption>
                        <!-- Description de l'oeuvre -->
                        <p class="description5">
                            <strong>BMW M3 (E30)</strong>, 2021
                            <br>
                            Crayon de papier, feutre
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
                <img class="myImages dessin6" id="myImg" style="cursor:pointer" src="Admin/files/Toons_F1.jpg">
                    <figcaption>
                        <!-- Description de l'oeuvre -->
                        <p class="description6">
                            <strong>F1 Toons</strong>, 2021
                            <br>
                            Crayon de papier, feutre
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
                <img class="myImages dessin7" id="myImg" style="cursor:pointer" src="Admin/files/Team_Yoshi.jpg">
                    <figcaption>
                        <!-- Description de l'oeuvre -->
                        <p class="description7">
                            <strong>Driver F1 Yoshi</strong>, 2021
                            <br>
                            Crayon de papier, feutre
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
                <img class="myImages dessin8" id="myImg" style="cursor:pointer" src="Admin/files/7DS.jpg">
                    <figcaption>
                        <!-- Description de l'oeuvre -->
                        <p class="description8">
                            <strong>7DS F1 (Animé)</strong>, 2021
                            <br>
                            Crayon de papier, feutre
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