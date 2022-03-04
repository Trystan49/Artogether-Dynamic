<?php
//enregistrement en BD du nouvel utilisateur
//chargement des paramètres de la BD
include('./utils/db.php');
//création de l'utilisateur
$pseudo = htmlspecialchars($_POST['pseudo']);
$mail = htmlspecialchars($_POST['mail']);
$pwd = htmlspecialchars($_POST['motdepasse']);
$prenom = htmlspecialchars($_POST['prenom']);
$nom = htmlspecialchars($_POST['nom']);

try {
    $stmt = $pdo->prepare("INSERT INTO utilisateurs (PSEUDO_UTILISATEUR, ADRESSE_MAIL_UTILISATEUR, MOT_DE_PASSE_UTILISATEUR, PRENOM_UTILISATEUR, NOM_UTILISATEUR) VALUES (?,?,?,?,?)");
    $stmt->execute([$pseudo, $mail, password_hash($pwd, PASSWORD_DEFAULT), $prenom, $nom]);
    header('Location: index.php?page=authentif');
} catch (PDOException $e) {
    echo "Erreur  : " . $e->getMessage();
}
