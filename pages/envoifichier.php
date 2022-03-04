<?php
include('./pages/models/fichier.php');
require('./utils/db.php');

if (isset($_POST['envoiFichier'])) {
  if (Fichier::upload($_FILES, $_POST, $pdo)) {
    echo "<p class=\"bg-success\">Fichier envoyé avec succès</p>";
  }
}
?>

<h1>ARTOGETHER</h1>

<h2>Uploader un fichier PNG ou JPG</h2>

<form action="index.php?page=envoifichier" method="POST" enctype="multipart/form-data">
  <!-- On utilise action pour relié notre fichier php qui contiendra 
            les scripts à executés pour l'envoie de nos fichiers, etant donné
            que l'on charge un fichier on indique enctype multipart/from-data-->
  <label for="intitule"></label>
  <br>
  <input class="import" type="file" name="fichier"/>
  <br>
  <input type="text" id="intitule" name="intitule" placeholder="Intitulé" required>
  <span><input type="text" id="date" name="date" placeholder="Date" required></span>
  <br>
  <br>
  <input type="submit" id="send" name="envoiFichier" value="Envoyer le fichier"/>
</form>
<br>

<h2>Fichiers PNG ou JPG enregistrés</h2>
<br>

<?php
if (Fichier::download($_FILES, $_POST, $pdo)) {
}
?>

<div class="champ">
  <button class="accueil" type="button"><a href="index.php?page=admin">Page admin</a></button>
</div>