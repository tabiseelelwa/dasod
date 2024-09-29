<?php
    require_once('../backend/connexion.php');


    $donnees = "SELECT * FROM agents";
    $agents = $conn->query($donnees);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="../styles/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../styles/Style.css">

        <!-- Importation SWIPERJS -->
        <link rel="stylesheet" href="../package/swiper-bundle.min.css"/>
        <title>DASOD-FPM</title>
        <style></style>
        
    </head>
    <body>
    <?php require_once('../Pages/navbar.php')?>

    <div class="affichAgents">
        <h1>Liste des agents inscrits</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Postnom</th>
                    <th>Prénom</th>
                    <th>Sexe</th>
                    <th>Etat civil</th>
                    <th>Lieu de naissance</th>
                    <th>Date de naissance</th>
                    <th>Province d'origine</th>
                    <th>Adresse actuelle</th>
                    <th>Téléphone</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($agents as $agent) {?>
                    <tr>
                        <td><?=$agent->nomAgent?></td>
                        <td><?=$agent->postnomAgent?></td>
                        <td><?=$agent->prenomAgent?></td>
                        <td><?=$agent->sexAgent?></td>
                        <td><?=$agent->etatCivil?></td>
                        <td><?=$agent->lieuNaissance?></td>
                        <td><?=$agent->dateNaissance?></td>
                        <td><?=$agent->provinceOrigine?></td>
                        <td><?=$agent->adresse?></td>
                        <td><?=$agent->telephone?></td>
                        <td><?=$agent->email?></td>
                        <td><i class="fa fa-edit"> </i></td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>

    <?php require_once('../Pages/footer.php') ?>
    <!-- ================================================== FIN PIED DE PAGE =============================================================== -->
    
    <script src="../Scripts/App.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>