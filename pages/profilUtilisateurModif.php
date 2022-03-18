<?php
//enregistrement en BD du nouvel utilisateur
//chargement des paramètres de la BD
include('./utils/db.php');

//modification de l'utilisateur
$pseudo = htmlspecialchars($_POST['pseudo']);
$mail = htmlspecialchars($_POST['mail']);
$pwd = htmlspecialchars($_POST['motdepasse']);
$prenom = htmlspecialchars($_POST['prenom']);
$nom = htmlspecialchars($_POST['nom']);
$id = $_SESSION["id_utilisateur"];
try {
    $sql = 'UPDATE utilisateurs SET PSEUDO_UTILISATEUR=?, PRENOM_UTILISATEUR=?, NOM_UTILISATEUR=?, ADRESSE_MAIL_UTILISATEUR=?, MOT_DE_PASSE_UTILISATEUR=? WHERE ID_UTILISATEUR=?';
    echo $sql;
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$pseudo, $prenom, $nom, $mail, password_hash($pwd, PASSWORD_DEFAULT), $id]);
    $stmt->fetch();
    header('Location: index.php?page=profilUtilisateur');
} catch (PDOException $e) {
    echo $e;
}