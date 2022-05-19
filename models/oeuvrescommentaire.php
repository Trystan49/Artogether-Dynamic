<?php
/* Fonction qui récupère tous les articles */
function getOeuvresComments($pdo)
{
    $stmt = $pdo->prepare("SELECT ID_OEUVRE, TITRE_OEUVRE, DATE_CREATION_EC FROM oeuvres WHERE ID_TYPES_OEUVRES = 1 ORDER BY ID_OEUVRE ASC");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
}
/* Fonction qui récupère un article */
function getOeuvre($idOeuvre)
{
    require('./utils/db.php');
    $stmt = $pdo->prepare("SELECT * FROM oeuvres WHERE ID_OEUVRE = ?");
    $stmt->execute(array($idOeuvre));
    if($stmt->rowCount() == 1){
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    else {
        header('Location: index.php?page=commentaire');
    }
}
/* Fonction qui ajoute un commentaire en BDD */
function addComment($oeuvreId, $pseudo, $comment)
{
    require('./utils/db.php');
    $stmt = $pdo->prepare("INSERT INTO interagir (ID_OEUVRE, PSEUDO_UTILISATEUR, MESSAGE_UTILISATEUR, DATE_COMMENTAIRE) VALUES (?,?,?, NOW())");
    $stmt->execute(array($oeuvreId, $pseudo, $comment));
    $stmt->closeCursor();
}
/* Fonction qui récupère les commentaires d'un article */
function getComments($idOeuvre)
{
    require('./utils/db.php');
    $stmt = $pdo->prepare("SELECT FROM interagir WHERE ID_OEUVRE = ?");
    $stmt->execute(array($idOeuvre));
    return $stmt->fetchAll(PDO::FETCH_OBJ);
    $stmt->closeCursor();
}