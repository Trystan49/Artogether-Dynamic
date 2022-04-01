<nav class="navbar navbar-inverse navbar-global navbar-fixed-top">
   <!-- Conteneur du site -->
   <div class="container-fluid">
      <!-- Haut de page -->
      <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"></button>
         <!-- Contenu du haut de page-->
         <a href="index.php?page=accueil">
            <div class="navbar-title">ARTOGETHER
         </a>
         <span class="slogan">Apprenons l'art de créer ensemble</span>
         <span class="create">Espace commentaire</span>
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
require('./utils/db.php');
if (isset($_GET['ID']) and !empty($_GET['ID'])) {
   $getid = htmlspecialchars($_GET['ID']);
   $oeuvre = $bdd->prepare('SELECT * FROM interagir WHERE ID = ?');
   $oeuvre->execute(array($getid));
   $oeuvre = $oeuvre->fetch();
   if (isset($_POST['submit_commentaire'])) {
      if (isset($_POST['ID_UTILISATEUR'], $_POST['COMMENTAIRE']) and !empty($_POST['ID_UTILISATEUR']) and !empty($_POST['COMMENTAIRE'])) {
         $pseudo = htmlspecialchars($_POST['ID_UTILISATEUR']);
         $commentaire = htmlspecialchars($_POST['COMMENTAIRE']);
         if (strlen($pseudo) < 25) {
            $ins = $bdd->prepare('INSERT INTO interagir (ID_UTILISATEUR, COMMENTAIRE, ID_OEUVRE) VALUES (?,?,?)');
            $ins->execute(array($pseudo, $commentaire, $getid));
            $c_msg = "<span style='color:green'>Votre commentaire a bien été posté</span>";
         } else {
            $c_msg = "Erreur: Le pseudo doit faire moins de 25 caractères";
         }
      } else {
         $c_msg = "Erreur: Tous les champs doivent être complétés";
      }

      $commentaires = $bdd->prepare('SELECT * FROM interagir WHERE ID_OEUVRE = ? ORDER BY ID DESC');
      $commentaires->execute(array($getid));
?>
      <br><br><br>
      <h2>ESPACE COMMENTAIRE</h2>
      <p><?= $oeuvre['CONTENU'] ?></p>
      <br>
      <h2>Commentaires:</h2>
      <form method="POST">
         <input type="text" name="pseudo" placeholder="Votre pseudo" /><br />
         <textarea name="commentaire" placeholder="Votre commentaire..."></textarea><br />
         <input type="submit" value="Poster mon commentaire" name="submit_commentaire" />
      </form>
      <?php if (isset($c_msg)) {
         echo $c_msg;
      } ?>
      <br /><br />
      <?php while ($c = $commentaires->fetch()) { ?>
         <b><?= $c['ID_UTILISATEUR'] ?>:</b> <?= $c['COMMENTAIRE'] ?><br />
      <?php } ?>
<?php
   }
}
