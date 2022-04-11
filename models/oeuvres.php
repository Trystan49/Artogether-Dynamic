<?php
    class Oeuvres{
        public static function getDrawing($pdo){
    
            $stmt = $pdo->prepare("SELECT ID_OEUVRE, IMG_OEUVRES FROM oeuvres");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public static function getImage($pdo){
    
            $stmt = $pdo->prepare("SELECT IMG_OEUVRES FROM oeuvres");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

    }
?>