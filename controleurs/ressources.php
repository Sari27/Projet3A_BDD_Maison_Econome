<?php

//On inclut les appels aux données
if(!isset($_SESSION['etat'])) {
    $function = "";
    $vue = "accueil";
    $title = "Accueil";
    $alerte = "Vous devez vous connecter";
    include ('vues/header.php');
    include ('vues/' . $vue . '.php');
    include ('vues/footer.php');
    exit();
}
include('./modele/requetes.afficher_ajouter_ressources.php');

// si la fonction n'est pas définie, on choisit d'afficher l'accueil
if (!isset($_GET['fonction']) || empty($_GET['fonction'])) {
    $function = "accueil";
    $alerte = "";
} else {
    $function = $_GET['fonction'];
    $alerte = "";
}

switch ($function) {

    case 'afficherRessources';
    
        $vue = "detail_appareil";
        $title = "Mes ressources";
        
        $entete = "Voici la liste des ressources :";
        
        $affRessources = afficherRessources($bdd);
        
        if($affRessources) {
            if (mysqli_num_rows($affRessources) <= 0) {
                $alerte = "Aucune ressources répertorié pour le moment";
            }
        }
        break;
        
    case 'afficherStat';
        $vue = "detail_appareil";
        $title = "Statistiques de l'appareil";
        
        $entete = "Voici les statistiques de votre appareil :";
        
        $affStat = afficherStat($bdd);
        
        if($affStat) {
            if (mysqli_num_rows($affStat) <= 0) {
                $alerte = "Aucune ressources répertorié pour le moment";
            }
        }
        break;
        
    default:
        // si aucune fonction ne correspond au paramètre function passé en GET
        $vue = "erreur404";
        $title = "error404";
        $message = "Erreur 404 : la page recherchée n'existe pas.";
}
        
        
        
        
        
        
include ('vues/header.php');
include ('vues/' . $vue . '.php');
include ('vues/footer.php');
