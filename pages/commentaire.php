<nav class="navbar navbar-inverse navbar-global navbar-fixed-top">
  <!-- Conteneur du site -->
      <div class="container-fluid">
        <!-- Haut de page -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"></button>
          <!-- Contenu du haut de page-->
          <a href="index.php?page=accueil"><div class="navbar-title">ARTOGETHER</a>
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

<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=artogether;charset=utf8','root','');
if(isset($_GET['id']) AND !empty($_GET['id'])) {
   $getid = htmlspecialchars($_GET['id']);
   $article = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
   $article->execute(array($getid));
   $article = $article->fetch();
   if(isset($_POST['submit_commentaire'])) {
      if(isset($_POST['pseudo'],$_POST['commentaire']) AND !empty($_POST['pseudo']) AND !empty($_POST['commentaire'])) {
         $pseudo = htmlspecialchars($_POST['pseudo']);
         $commentaire = htmlspecialchars($_POST['commentaire']);
         if(strlen($pseudo) < 25) {
            $ins = $bdd->prepare('INSERT INTO commentaires (pseudo, commentaire, id_article) VALUES (?,?,?)');
            $ins->execute(array($pseudo,$commentaire,$getid));
            $c_msg = "<span style='color:green'>Votre commentaire a bien été posté</span>";
         } else {
            $c_msg = "Erreur: Le pseudo doit faire moins de 25 caractères";
         }
      } else {
         $c_msg = "Erreur: Tous les champs doivent être complétés";
      }
   }
   $commentaires = $bdd->prepare('SELECT * FROM commentaires WHERE id_article = ? ORDER BY id DESC');
   $commentaires->execute(array($getid));
?>
<h2>Article:</h2>
<p><?= $article['contenu'] ?></p>
<br />
<h2>Commentaires:</h2>
<form method="POST">
   <input type="text" name="pseudo" placeholder="Votre pseudo" /><br />
   <textarea name="commentaire" placeholder="Votre commentaire..."></textarea><br />
   <input type="submit" value="Poster mon commentaire" name="submit_commentaire" />
</form>
<?php if(isset($c_msg)) { echo $c_msg; } ?>
<br /><br />
<?php while($c = $commentaires->fetch()) { ?>
   <b><?= $c['pseudo'] ?>:</b> <?= $c['commentaire'] ?><br />
<?php } ?>
<?php
}