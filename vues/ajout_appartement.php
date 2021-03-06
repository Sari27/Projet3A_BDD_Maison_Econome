<?php
/**
* Vue : ajouter un appartement
*/
?>

<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8" />
            <link rel="stylesheet" href="public/css/styles_con.css"/>
        </head>

    <body>

        <?php echo AfficheAlerte($alerte); ?>

        <form method="POST" action="">

            <p><label for="id_libelle">Libellé :</label>
            <input type="text" id="id_libelle"  name="libelle" 
                   placeholder="Entrez le libellé" required=""/></p>

            <p><label for="degreSecuriteAppartement">Degré de sécurité :</label>
            <input type="text" id="degreSecuriteAppartement"  name="degreSecuriteAppartement" 
                   placeholder="Entrez le degré de sécurité" required=""/></p>


            <p><label for="Id_Type_Appartement">Type :</label>
            <select id="Id_Type_Appartement" name="typeAppartement" >
                <option value="default">Choisissez le type de votre appartement</option>
                <?php              
                    foreach ($selectTypeAppartement as $element) { 
                        echo '<option value="'.$element['Id_Type_Appartement'].'">'.$element['libelle_type_appartement'].'</option>';
                    }
                ?>
            </select></p>

            <p><label for="Id_Maison">Maison :</label>
            <select id="Id_Maison" name="maison" >
                <option value="default">Choisissez la maison</option>
                <?php              
                    foreach ($selectMaison as $element) { 
                        echo '<option value="'.$element['Id_Maison'].'">'.$element['nomMaison'].'</option>';
                    }
                ?>
            </select></p>

            <p><button type="submit" id="id_ajout" name="submit">Ajouter</button></p>

        </form>

        <p><a href="index.php?cible=pieces&fonction=ajouterPiece">Ajouter une pièce</a></p>
        <p><a href="index.php?cible=dateLocation&fonction=ajouterDateLocation">Ajouter une date de location</a></p>
        <p><a href="index.php?cible=appartements&fonction=afficherAppartements">Retour aux appartements</a></p>

    </body>
</html>