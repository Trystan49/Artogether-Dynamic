<?php
ob_start();

?>
<!-- Barre de navigation à gauche -->
<nav class="navbar-primary">
    <!-- Menu -->
    <ul class="navbar-primary-menu">
        <li>
            <a href="index.php?page=accueil"><span class="glyphicon glyphicon-home"></span><span
                    class="nav-label">Accueil</span></a>
            <a href="index.php?page=art"><span class="glyphicon glyphicon-pencil"></span><span
                    class="nav-label">Art</span></a>
            <a href="index.php?page=artgraphique"><span class="glyphicon glyphicon-picture"></span><span
                    class="nav-label">Art graphique</span></a>
            <a href="index.php?page=logo"><span class="glyphicon glyphicon-record"></span><span
                    class="nav-label">Logo</span></a>
            <a href="index.php?page=forum"><span class="glyphicon glyphicon-comment"></span><span
                    class="nav-label">Forum de discussion</span></a>
        </li>
    </ul>
    <!-- Bouton de connexion avec popup -->
    <div class="popup-container">
        <?php
        if (@$_SESSION["etatConnexion"] == "1"){
            echo('<label class="buttonD"><a class="textbuttonD" href="index.php?page=deconnexion">Deconnexion</a></label>');
        }
        else {
            echo('<label class="buttonC" for="login-popup">Connexion</label>
            <input type="checkbox" id="login-popup">');
        }
        ?>
        <div class="popup">
            <label for="login-popup"></label>
            <div class="inner">
                <div class="title">
                    <h6>CONNEXION</h6>
                    <label for="login-popup">
                        <span class="glyphicon glyphicon-remove"></span>
                    </label>
                </div>
                <form action="index.php?page=connexion" method="post" role="form">
                    <div class="champ">
                        <br>
                        <input class="pseudo" type="text" id="pseudo" name="pseudo" placeholder="Pseudo" value=""
                            required>
                    </div>
                    <div class="champ form-group d-flex">
                        <input type="password" name="motdepasse" id="motdepasse" tabindex="1" class="motdepasse"
                            placeholder="Mot de passe" required>
                        <i class="bi-eye-slash" id="toggleMotDePasse"></i>
                    </div>
                    <div class="champ">
                        <?php
                        if (isset($_SESSION["etatConnexion"]) && $_SESSION["etatConnexion"] == 0) {
                            echo "<p style=color:red><u>Identifiant ou mot de passe incorrect<u></p>";
                        }
                        ?>
                        <input class="send" type="submit" value="Connexion">
                    </div>
                    <div class="forget">
                        <a class="forget" href="../9.Page recuperation mdp 2/mdp2.html" target="_blank"><u>Mot de passe
                                oublié ?</u></a>
                    </div>
                    <br>
                    <div class="account">
                        <a class="account" href="index.php?page=inscription" target="_blank"><u>Créer un compte</u></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Logo barre de navigation -->
    <a href="index.php?page=admin"><img class="logo" src="public/Medias/LOGO OFFICIEL TRISTAN (Transparent).png"></a>
</nav>

<script>
const togglePassword = document.querySelector("#toggleMotDePasse");
const password = document.querySelector("#motdepasse");

togglePassword.addEventListener("click", function() {
    // toggle the type attribute
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);

    // toggle the icon
    this.classList.toggle("bi-eye");
});

// prevent form submit
const form = document.querySelector("form");
form.addEventListener('submit');
</script>