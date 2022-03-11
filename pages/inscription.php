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
            <span class="create">Création de compte</span>
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

<!-- Contenu -->
<div class="main-content">
    <div class="aide">
        <span class="title">ARTOGETHER</span>
        <br>
        <span class="titlebis">Création de compte</span>
        <form action="index.php?page=register" method="post" role="form">
            <div class="champ">
                <br>
                <input class="prenom" type="text" id="prenom" name="prenom" tabindex="1" placeholder="Prénom" required>
            </div>
            <div class="champ">
                <input class="nom" type="text" id="nom" name="nom" tabindex="1" placeholder="Nom" required>
            </div>
            <div class="champ">
                <input class="pseudo" type="text" id="pseudo" name="pseudo" tabindex="1" placeholder="Pseudo" required>
            </div>
            <div class="champ">
                <input class="mail" type="text" required size="20" pattern="^[^@\s]+@[^@\s]+\.[^@\s]+$" id="mail"
                    name="mail" tabindex="1" placeholder="Adresse mail">
            </div>
            <div class="champ form-group d-flex">
                <input type="password" required name="motdepasse" id="motdepasse" tabindex="1" class="motdepasse"
                    placeholder="Mot de passe">
                <i class="bi bi-eye-slash" id="toggleMotDePasse"></i>
            </div>
            <div class="securitypwd">
                Votre mot de passe doit contenir au moins 8 caractères <br> ainsi qu'un mélange de lettres, chiffres et symboles.
            </div>
            <!--bouton d'envoi du formulaire-->
            <div class="champ">
                <input class="send" type="submit" value="Créer un compte">
            </div>
            <div class="account">
                Déjà membre ?<a href="index.php?page=authentif"> <u>Se connecter</u></a>
            </div>
        </form>
    </div>
</div>

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