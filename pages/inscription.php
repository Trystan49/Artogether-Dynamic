<!-- Dashboard -->
<div class="navbar navbar-inverse navbar-global navbar-fixed-top">
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
</div>

<!-- Contenu -->
<div class="main-content">
    <div class="aide">
        <span class="title">ARTOGETHER</span>
        <br>
        <span class="titlebis">Création de compte</span>
        <form action="index.php?page=register" method="post" role="form">
            <div class="champ">
                <br>
                <input class="prenom" type="text" id="prenom" name="prenom" size="30" maxlength="25" placeholder="Prénom" required>
            </div>
            <div class="champ">
                <input class="nom" type="text" id="nom" name="nom" size="30" maxlength="25" placeholder="Nom" required>
            </div>
            <div class="champ">
                <input class="pseudo" type="text" id="pseudo" name="pseudo" size="30" maxlength="25" placeholder="Pseudo" required>
            </div>
            <div class="champ">
                <input class="mail" type="text" required maxlength="50" pattern="^[^@\s]+@[^@\s]+\.[^@\s]+$" id="mail"
                    name="mail" size="30" placeholder="Adresse mail">
            </div>
            <div class="champ form-group d-flex">
                <input type="password" required name="motdepasse" id="motdepasse" size="30" maxlength="25" class="motdepasse"
                    placeholder="Mot de passe" onchange="controlPwd(this)">
                <i class="bi bi-eye-slash" id="toggleMotDePasse"></i>
            </div>
            <div class="champ form-group d-flex">
                <input type="password" name="confirm-motdepasse" maxlength="25" size="30" onchange="confirmPwd()" id="confirm-motdepasse"
                    tabindex="2" class="motdepasse" placeholder="Confirmer mot de passe" required>
                <i class="bi bi-eye-slash" id="toggleMotDePasse"></i>
            </div>
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

function controlPwd(elemPwd) {
    const pwd = String(elemPwd.value);
    if (!pwd.match(/[0-9]/g) || !pwd.match(/[A-Z]/g) || !pwd.match(/[a-z]/g) || !pwd.match(/[^a-zA-Z\d]/g) || pwd
        .length < 8) {
        //mot de passe invalide
        elemPwd.validity.valid = "false";
        //info bulle sur le type d'erreur
        elemPwd.setCustomValidity(
            "Votre mot de passe doit comporter au moins 12 caractères avec au moins une majuscule, minuscule, chiffre et signe de ponctuation"
            );
    } else {
        //nettoyage de l'invalidité de la zone
        elemPwd.validity.valid = "true";
        elemPwd.setCustomValidity("");
    }
}
</script>