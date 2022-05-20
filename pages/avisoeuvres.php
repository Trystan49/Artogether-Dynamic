<?php
if(true) {
    extract($_GET);
    $idOeuvre = $_GET['id'];
    /* strip_tags($idOeuvre) */
    require_once('./models/oeuvrescommentaire.php');

    if (!empty($_POST)) {
        extract($_POST);
        $errors = array();

        $pseudo = strip_tags($pseudo);
        $comment = strip_tags($comment);

        if (empty($pseudo))
            array_push($errors, 'Entrez un pseudo');

        if (empty($comment))
            array_push($errors, 'Entrez un commentaire');

        if (count($errors) == 0) {
            $comment = addComment($idOeuvre, $pseudo, $comment);
            $success = "Votre commentaire a bien été publié";

            unset($pseudo);
            unset($comment);
        }
    }

    $oeuvre = getOeuvre($idOeuvre);
    $comments = getComments($idOeuvre);
}
?>

<div class="navbar navbar-inverse navbar-global navbar-fixed-top">
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
</div>
<br><br><br><br><br>
<div class="container-fluid">
    <a href="index.php?page=commentaire" class="btn btn-success">Retour aux oeuvres</a>
    <h1><?php echo $oeuvre['TITRE_OEUVRE'] ?></h1>
    <time><?php echo $oeuvre['DATE_CREATION_EC'] ?></time>
    <p><?php echo $oeuvre['CONTENU_OEUVRES'] ?></p>
    <hr>

    <?php
    if (isset($success))
        echo $success;
    if (!empty($errors)) : ?>
        <?php foreach ($errors as $error) : ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="alert alert-danger"><?= $error ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif;
    ?>

    <div class="row">
        <div class="col-md-6">
        <form action="index.php?page=avisoeuvres&id=<?= $oeuvre['ID_OEUVRE'] ?>" method="post">
        <p><label for="pseudo">Pseudo :</label><br>
            <input type="text" name="pseudo" id="pseudo" value="<?php if (isset($pseudo)) echo $pseudo ?>" class="form-control">
        </p>
        <p><label for="comment">Commentaire :</label><br>
            <textarea name="comment" id="comment" cols="30" rows="5" value="<?php if (isset($comment)) echo $comment ?>" class="form-control"></textarea>
        </p>
        <button type="submit" class="btn btn-success">Envoyer</button>
    </form>
        </div>
    </div>
    <hr>
    <h2>Commentaires: </h2>

    <?php foreach ($comments as $com) : ?>
        <h3><?= $com['PSEUDO_UTILISATEUR'] ?></h3>
        <time><?= $com['DATE_CREATION_EC'] ?></time>
        <p><?= $com['MESSAGE_UTILISATEUR'] ?></p>
    <?php endforeach; ?>
</div>