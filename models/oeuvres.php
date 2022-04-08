<?php
    class Oeuvres{
        public static function getDrawing($pdo){
    
            $stmt = $pdo->prepare("SELECT * FROM oeuvres WHERE ID_TYPES_OEUVRES = 1");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public static function getImage($pdo){
    
            $stmt = $pdo->prepare("SELECT * FROM oeuvres WHERE ID_TYPES_OEUVRES = 2");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

    }
?>