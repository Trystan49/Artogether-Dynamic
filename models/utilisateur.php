<?php
    class Utilisateur{
        public static function create($pdoP, $values){
        //insert php
        }
        public static function update($pdoP, $values){
        $pseudo = htmlspecialchars($values['pseudo']);
        $prenom = htmlspecialchars($values['prenom']);
        $nom = htmlspecialchars($values['nom']);
        $mail = htmlspecialchars($values['mail']);
        $pwd = htmlspecialchars($values['motdepasse']);
        $id = $_SESSION["id_utilisateur"];
            try {
                $sql = 'UPDATE utilisateurs SET PSEUDO_UTILISATEUR=?, PRENOM_UTILISATEUR=?, NOM_UTILISATEUR=?, ADRESSE_MAIL_UTILISATEUR=?, MOT_DE_PASSE_UTILISATEUR=? WHERE ID_UTILISATEUR=?';
                $stmt = $pdoP->prepare($sql);
                $stmt->execute([$pseudo, $prenom, $nom, $mail, password_hash($pwd, PASSWORD_DEFAULT), $id]);
                Utilisateur::refresh($pseudo, $prenom, $nom, $mail);
                header('Location: index.php?page=profilUtilisateur');
                die();
            } catch (PDOException $e) {
                echo $e;
            }
        }
        private static function refresh($pseudo, $prenom, $nom, $mail){
            // mettre à jour les données de l'utilisateur dans la session
            $_SESSION["pseudo"] = $pseudo;
            $_SESSION["prenom"] = $prenom;
            $_SESSION["nom"] = $nom;
            $_SESSION["mail"] = $mail;
        }  
    }
?>