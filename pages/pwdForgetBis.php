<?php
//chargement des paramètres de la BD
include('./utils/db.php');
//chargement des fonctions liées à la manipulation des données utilisateur
include('./models/utilisateur.php');

//CAS où l'utilisateur débute sa demande de réinitialisation de mot de passe
$user = htmlspecialchars(@$_GET['pseudo']);
if (strlen($user) == 0) { //l'utilisateur n'a pas saisi son identifiant
    echo '
    <div class="navbar navbar-inverse navbar-global navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="index.php?page=accueil">
                    <div class="navbar-title">ARTOGETHER
                </a>
                <span class="slogan">Apprenons l\'art de créer ensemble</span>
                <span class="forgetMdp">L\'oubli, c\'est la vie ! (A.Allais)</span>
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
    </div>';
        
    echo '<div class="main-content">
  <div class="aide">
    <span class="title">ARTOGETHER</span>
    <br>
    <br>
    <span class="titlebis">Récupération mot de passe</span>
    <form method="GET" action="index.php?page=pwdForget">
    <input type="hidden" name="page" value="pwdForget">
      <div class="champ">
          <br>
          <input class="pseudo" type="text" id="pseudo" name="pseudo" placeholder="Pseudo" value="" required>
      </div>
      <div class="champ">
          <input class="send" type="submit" name="login-submit" id="login-submit" value="Envoi mail">
      </div>
    </form>
  </div>
</div>';
} else {
    $dest = Utilisateur::getMail($pdo, $user);
    $sujet = "Modification de mot de passe";
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=UTF-8';
    $headers[] = 'From: Artogether"<contact.artogether@gmail.com>';
    //génération d'une chaine de façon aléatoire.
    $token = openssl_random_pseudo_bytes(16);
    //convertion de la chaine en representation hexadecimal.
    $token = bin2hex($token);
    $message = '<h1>Réinitialisation de votre mot de passe</h1>
    <p>pour réinitialiser votre mot de passe, veuillez suivre ce lien : 
    <a href="localhost/artogether/index.php?page=pwdForget&token=' . $token . '">lien</a></p>fin message';
    if (mail($dest, $sujet, utf8_decode($message), implode("\r\n", $headers))) {
        echo "Un email vous a été envoyé sur votre boite mail, veuillez le consulter.";
        //enregistrement en BD du token et de la date
        Utilisateur::updateToken($pdo, $token, $user);
    } else {
        echo "Échec de l'envoi de l'email. Veuillez vous adresser à l'administrateur.";
    }
}
?>
<script src="public/JS/pwdForget.js"></script>