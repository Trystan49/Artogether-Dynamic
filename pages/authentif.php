<!-- Dashboard -->
<nav class="navbar navbar-inverse navbar-global navbar-fixed-top">
    <!-- Conteneur du site -->
    <div class="container-fluid">
        <!-- Haut de page -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
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
            <span class="citation">L'art aide à vivre !</span>
            <span class="author">(E-E Schmitt.)</span>
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
<br><br><br>
<?php
if (isset($_GET["creation"])) {
    echo ('
    <div class="alert success-alert">
        <p class="success">Votre profil a été créé avec succès ! 🎉<br><br> Vous pouvez vous connecter !</p>
    </div>
  ');
}
?>
<!-- Contenu -->
<div class="main-content">
    <div class="aide">
        <span class="title">ARTOGETHER</span>
        <br>
        <span class="titlebis">L'art est entre vos mains</span>
        <form action="index.php?page=connexion" method="post" role="form">
            <div class="champ">
                <br>
                <input class="pseudo" type="text" id="pseudo" name="pseudo" size="30" maxlength="25" placeholder="Pseudo" value="" required>
            </div>
            <div class="champ form-group d-flex">
                <input type="password" name="motdepasse" id="motdepasse" size="30" maxlength="25" class="motdepasse" placeholder="Mot de passe" required>
                <i class="bi-eye-slash" id="toggleMotDePasse"></i>
            </div>
            <!--bouton d'envoi du formulaire-->
            <div class="champ">
                <?php
                if (isset($_SESSION["etatConnexion"]) && $_SESSION["etatConnexion"] == 0) {
                    echo '<p style=color:red>Identifiant ou mot de passe incorrect</p>';
                }
                ?>
                <input class="send" type="submit" value="Connexion">
            </div>
            <div class="forget">
                <a href="../8.Page recuperation mdp 1/mdp1.html" target="_blank"><u>Mot de passe oublié ?</u></a>
            </div>
            <br>
            <div class="account">
                <a href="index.php?page=inscription" target="_blank"><u>Créer un compte</u></a>
            </div>
        </form>

    </div>
</div>

<script>
    /* Possibilité de rendre visible le mot de passe avec l'oeil */
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