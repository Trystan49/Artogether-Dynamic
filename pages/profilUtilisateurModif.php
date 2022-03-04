<?php
//enregistrement en BD du nouvel utilisateur
//chargement des paramètres de la BD
include('./utils/db.php');
    
//modification de l'utilisateur
$username = htmlspecialchars($_POST['username']);
$prenom = htmlspecialchars($_POST['firstname']);
$nom = htmlspecialchars($_POST['lastname']);
$pwd = htmlspecialchars($_POST['password']);
$confirm_pwd = htmlspecialchars($_POST['confirm-pwd']);
$id = $_SESSION["id_util"];
try {
        $sql ='UPDATE utilisateurs SET ident_util=?, prenom_util=?, nom_util=?, pwd_util=?, pwd_util=? WHERE id_util=?';
        echo $sql;
        $stmt=$pdo->prepare($sql);
        $stmt->execute([$username, $prenom, $nom, $id, password_hash($pwd, PASSWORD_DEFAULT), password_hash($confirm_pwd, PASSWORD_DEFAULT) ]);
        $stmt->fetch();
    } catch(PDOException $e){
        echo $e;
    }

