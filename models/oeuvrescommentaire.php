<?php
/* Fonction qui récupère tous les articles */
function getOeuvresComments($pdo)
{
    $stmt = $pdo->prepare("SELECT ID_OEUVRE, TITRE_OEUVRE, DATE_CREATION_EC FROM oeuvres ORDER BY ID_OEUVRE DESC");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
}
/* Fonction qui récupère un article */
function getOeuvre($idOeuvre)
{
    require_once('./utils/db.php');
    $stmt = $pdo->prepare("SELECT * FROM oeuvres WHERE ID_OEUVRE = ?");
    $stmt->execute(array($idOeuvre));
    if($stmt->rowCount() == 1){
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    else {
        header('Location: index.php?page=commentaire');
    }
}