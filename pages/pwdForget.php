<?php
//chargement des paramètres de la BD
include('./utils/db.php');
//chargement des fonctions liées à la manipulation des données utilisateur
include('./models/utilisateur.php');

if (isset($_POST['recovery-submit'])) { //CAS où l'utilisateur valid son changement de mot de passe
    Utilisateur::reinitPwd($pdo, $_POST);
    header('Location: index.php?page=authentif');
    die();
} else if (isset($_GET['token'])) { //CAS où l'utilisateur à cliqué sur le lien du message de l'email
    $infosToken = Utilisateur::getInfosToken($pdo, $_GET['token']);
    if (empty($infosToken)) { //pas de jeton trouvé en BD
        echo "votre jeton n'existe pas, veuillez demander de nouveau une réinitialisation du mot de passe.";
    } else { //le jeton existe
        //contrôle de la validité du jeton
        $timeToken = strtotime(date($infosToken['PWD_CHANGE_DATE']));
        $timeCourant = time();
        $delais = 900; //15 minutes
        if ($timeCourant - $timeToken > $delais) { //le délais est dépassé
            echo "le délais pour changer votre mot de passe est dépassé. Veuillez refaire la demande.";
        } else { //l'utilisateur peut saisir un nouveau mot de passe car jeton valide et délas non dépassé
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
            </div>;';
            echo '<br><br><br><br><br><br><br><br>
            <div class="main-content">
<div class="aide">
  <span class="title">ARTOGETHER</span>
  <br>
  <br>
  <span class="titlebis">Réinitialisation de votre mot de passe</span>
  <form id="recovery-form" action="index.php?page=pwdForget" method="POST">
  <input type="hidden" name="page" value="pwdForget">
    <div class="champ">
        <br>
        <input class="pseudo" type="text" onchange="verifUser(\'' . $infosToken['PSEUDO_UTILISATEUR'] . '\')" id="pseudo" name="pseudo" placeholder="Pseudo" value="" required>
    </div>
    <div class="champ">
        <input type="password" class="password" name="motdepasse" id="motdepasse" placeholder="Nouveau mot de passe" value="" required>
    </div>
    <div class="champ">
        <input type="password" class="password" name="motdepasse" id="motdepasse" placeholder="Confirmer mot de passe" value="" required>
    </div>
    <br>
    <div class="champ">
        <input class="send" type="submit" name="recovery-submit" id="recovery-submit" value="Changement mot de passe">
    </div>
  </form>
</div>
</div>';
        }
    }
} else {
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
        $message = '
        <h1 style="font-family: Square Peg, cursive; text-align: center">ARTOGETHER</h1>
        <h2 style="font-size: 20px; background-color: yellow; text-align: center">MODIFICATION DE MOT DE PASSE</h2>
        <p>Un nouveau mot de passe a conserver :)</p>
        <p>Veuillez suivre ce lien : <a href="localhost/ARTOGETHER-Dynamic/index.php?page=pwdForget&token=' . $token . '">Recreer un mot de passe</a></p>
        </p>Pour vous eviter des heures de recherche, on a pense à mettre une "ouverture facile" : tout simplement creer un nouveau code secret.</p>
        <p>En quelques clics, c\'est dans la boite !</p>
        <p>Cordialement.</p>
        <p>L\'equipe Artogether.</p>';
        if (mail($dest, $sujet, utf8_decode($message), implode("\r\n", $headers))) {
            echo "Un email vous a été envoyé sur votre boite mail, veuillez le consulter. 📤";
            //enregistrement en BD du token et de la date
            Utilisateur::updateToken($pdo, $token, $user);
        } else {
            echo "Échec de l'envoi de l'email. Veuillez vous adresser à l'administrateur. ❌";
        }
    }
}
?>
<script src="public/js/pwdForget.js"></script>