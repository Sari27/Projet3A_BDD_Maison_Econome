<?php 
/**
* Vue : liste des appartements
*/
?>

<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8" />
            <link rel="stylesheet" href="public/css/styles_con.css"/>
        </head>

    <body>

        <p><?php echo $entete; ?></p>


        <table class='appartement_table'>
        	<thead>
        		<tr>
                    <th class='appartement_td'>Libellé</th>
        			<th class='appartement_td'>Degré de sécurité</th>
                    <th class='appartement_td'>Type de l'appartement</th>
                    <th class='appartement_td'>Libellé de la maison</th>
                    <th class='appartement_td'>Date de début de location</th>
                    <th class='appartement_td'>Date de fin de location</th>
        		</tr>
        	</thead>
        	<tbody>	
        	
            <?php foreach ($afficherAppartements as $element) { ?>
            
                <tr> 
                    <td class='appartement_td'>
        		    <?php echo $element['libelleAppartement']; ?>
                    </td>
                    <td class='appartement_td'>
                	<?php echo $element['degreSecuriteAppartement']; ?>
                    </td>
                    <td class='appartement_td'>
                    <?php echo $element['libelle_type_appartement']; ?>
                    </td>
                    <td class='appartement_td'>
                    <?php echo $element['nomMaison']; ?>
                    </td>
                    <td class='appartement_td'>
                    <?php echo $element['dateDebutLocation']; ?>
                    </td>
                    <td class='appartement_td'>
                    <?php echo $element['dateFinLocation']; ?>
                    </td>
                </tr>
            
            <?php } ?>

        	</tbody>
        </table>


        <?php echo AfficheAlerte($alerte); ?>

        <p><a href="index.php">Accueil</a></p>
    </body>
</html>