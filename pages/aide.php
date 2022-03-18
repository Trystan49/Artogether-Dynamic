<?php
if(isset($_POST['mailform'])) {
   if(!empty($_POST['prenom']) AND !empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['sujet']) AND !empty($_POST['message'])) {
      $header="MIME-Version: 1.0\r\n";
      $header.='From:"Artogether"<contact.artogether@gmail.com>'."\n";
      $header.='Content-Type:text/html; charset="uft-8"'."\n";
      $header.='Content-Transfer-Encoding: 8bit';
      $message='
      <html>
         <body>
            <div align="center">
               <u>Prénom de l\'expéditeur :</u> '.$_POST['prenom'].' <br />
               <u>Nom de l\'expéditeur :</u> '.$_POST['nom'].' <br />
               <u>Mail de l\'expéditeur :</u> '.$_POST['mail'].' <br />
               <u>Sujet :</u> '.$_POST['sujet'].' <br />
               <br />
               '.nl2br($_POST['message']).'
               <br />
            </div>
         </body>
      </html>
      ';
      mail("artogether492022@outlook.fr", "CONTACT - ARTOGETHER", $message, $header);
      $msg='<p style=color:green>Votre message a bien été envoyé !</p>';
   } else {
      $msg='<p style=color:red>Tous les champs doivent être complétés !</p>';
   }
}
?>
<!-- Dashboard -->
<nav class="navbar navbar-inverse navbar-global navbar-fixed-top">
    <!-- Conteneur du site -->
    <div class="container-fluid">
        <!-- Haut de page -->
        <div class="navbar-header">
            <!-- Contenu du haut de page -->
            <a href="index.php?page=accueil">
                <div class="navbar-title">ARTOGETHER
            </a>
            <span class="slogan">Apprenons l'art de créer ensemble</span>
            <span class="home">Aide et coordonnées</span>
            <span class="citation">L'art aide à vivre !</span>
            <span class="author">(E-E Schmitt.)</span>
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
    <!-- Formulaire contact auprès du propriétaire du site -->
    <div class="aide">Une explication personnelle sur un projet ?<br>Des questions ? Besoin d'aide ? <br>N'hésitez pas,
        Artogether est là pour vous aider.<br> Laissez-moi votre message et j'y<br> répondrai dans les plus brefs
        délais.
        <form method="post" action="">
            <div class="champ">
                <br>
                <input class="prenom" type="text" id="prenom" name="prenom" placeholder="Prénom" maxlength="25" size="30"
                    value="<?php if(isset($_POST['prenom'])) { echo $_POST['prenom']; } ?>">
            </div>
            <div class="champ">
                <input class="nom" type="text" id="nom" name="nom" placeholder="Nom" maxlength="25" size="30"
                    value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>">
            </div>
            <div class="champ">
                <input class="mail" type="text" id="mail" name="mail" placeholder="Adresse mail" pattern="^[^@\s]+@[^@\s]+\.[^@\s]+$" maxlength="50" size="30"
                    value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>">
            </div>
            <div class="champ">
                <input class="sujet" type="text" id="sujet" name="sujet" placeholder="Sujet" maxlength="100" size="30"
                    value="<?php if(isset($_POST['sujet'])) { echo $_POST['sujet']; } ?>">
            </div>
            <div class="champ">
                <textarea rows="2" cols="30" class="message" type="message" id="message" name="message" placeholder="Message" maxlength="1000"
                    value="<?php if(isset($_POST['message'])) { echo $_POST['message']; } ?>"></textarea>
            </div>
            <!--bouton d'envoi du formulaire-->
            <div class="champ">
                <input class="send" type="submit" value="Envoyer le message" name="mailform">
            </div>
        </form>
        <?php if (isset($msg)) {
          echo $msg;
        }
        ?>
    </div>
    <img class="journal" src="public/Medias/journal.png">
    <!-- Coordonnées et fil d'actualité -->
    <span class="contact"> Coordonnées !
        <br>
        <p class="email">Email: contact.artogether@gmail.com
    </span>
    <br>
    <p class="siteweb">Site web : https://www.artogether.fr</span>
        <br>
    <div class="holder">
        <ul id="ticker01">
            <li><u><em>Nos prochaines actualités</em></u></a></li>
            <li><span>31/12/2021</span><br><a href="#">Finalisation de la base HTML du site</a></li>
            <li><span>31/05/2022</span><br><a href="#">Finalisation partie backend du site</a></li>
            <li><span>28/07/2022</span><br><a href="#">Nouvel onglet "Logo"</a></li>
            <li><span>05/07/2022</span><br><a href="#">Présentation du site</a></li>
            <li><span>31/08/2022</span><br><a href="#">Ouverture du site</a></li>
            <li><span>31/10/2022</span><br><a href="#">Evolution du site internet</a></li>
            <li><span>25/03/2023</span><br><a href="#">Mise en place d'une boutique en ligne</a></li>
        </ul>
    </div>
</div>

<script src='public/CDN/jquery.min.js'></script>
<script src="public/JS/aidescript.js"></script>