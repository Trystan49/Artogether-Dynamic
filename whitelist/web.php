<?php
$whitelist = array('connexion', 'authentif', 'inscription', 'register', 'viderSession', 'profilUtilisateur', 'profilUtilisateurModif', 'forum', 'accueil', 'art', 'artgraphique', 'logo', 'preview', 'aide', 'preview', 'mdp1', 'mdp2', 'commentaire', 'envoifichier', 'files', 'admin', 'game', 'cgu', 'cookies', 'donneespersonnelles', 'mentionslegales');
if (isset($_SESSION["etatConnexion"]) && $_SESSION["etatConnexion"] == 1) {
    //la connexion a été établie
    array_push($whitelist, 'accueil', 'deconnexion',);
}
//déclarer des accès specifique admin