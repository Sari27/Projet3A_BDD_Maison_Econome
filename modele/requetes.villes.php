<?php

/**
 * Liste des fonctions spécifiques à la table des départements
 */

// on récupère les requêtes génériques
include('requetes.generiques.php');

//on définit le nom de la table
$table = "ville";

/**
 * Recherche les villes en fonction du type passé en paramètre
 * @param mysqli $bdd
 * @param string $table
 * @param string $type
 * @return array
 */
function rechercheParType(mysqli $bdd, string $table, string $id): array {
    
    return recherche($bdd, $table, ['Id_Ville' => $id]);
    
}

function afficheVille(mysqli $bdd) {
    
    $query = 'SELECT * FROM ville NATURAL JOIN departement ORDER BY code_postal';
    
    return mysqli_query($bdd, $query);
}

function getVille(mysqli $bdd, int $id) {
    
    $query = 'SELECT * FROM ville NATURAL JOIN departement WHERE Id_Ville = '.$id;
    return mysqli_query($bdd, $query);
}


function supprVille(mysqli $bdd, int $id) {
    $query = 'DELETE FROM ville WHERE Id_ville = '.$id;
    return mysqli_query($bdd, $query);
}

?>