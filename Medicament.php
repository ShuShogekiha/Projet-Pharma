<!--<?php include_once(__DIR__ . "/webfiles/php/fileBDD.php"); ?>-->

<?php include_once(__DIR__ . "/webfiles/php/fileHead.php"); ?>

<!-- Mise en page Medicament -->
<div>
    <?php

        include_once(__DIR__ . "/webfiles/php/fileBDD.php");

        // $result = new fileBDD();
        // $val = $result->getListMedicament();

        // if ($val->execute()) {
        //     while ($donnees = $val->fetch()) {
        //         echo '<div>
        //                     <img class="" src="./img/medicament/' . $donnees['name'] . '.webp" />
        //                     <p>' . $donnees['name'] . '</p>
        //                 </div>';
        //     }
        // } else {
        //     echo 'Une erreur est survenue lors de la récupération de la requête.';
        // }
        ?>
</div>
<!-- Fin de Mise en page Medicament -->
</main>
<?php include_once(__DIR__ . "/webfiles/php/fileFooter.php"); ?>
</body>