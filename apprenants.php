<?php
    require_once('backend/connexion.php');

    if(isset($_POST["ajouter"]))
    {
        $nom = $_POST['nom'];
        $postnom = $_POST['postnom'];
        $prenom = $_POST['prenom'];
        $sexe = $_POST['sexe'];
        $etatCivil = $_POST['etatCivil'];
        $lieuNaiss = $_POST['lieuNaiss'];
        $dateNaiss = $_POST['dateNaiss'];
        $proviOrig = $_POST['provOrig'];
        $adresse = $_POST['adresse'];
        $telephone = $_POST['telephone'];
        $email = $_POST['email'];
        $primaire = $_POST["primaire"];
        $secondaire = $_POST["secondaire"];
        $universite = $_POST["universite"];
        $form_1 = $_POST["form_1"];
        $form_2 = $_POST["form_2"];
        $form_3 = $_POST["form_3"];
        $choix_1 = $_POST["choix_1"];
        $choix_2 = $_POST["choix_2"];

        $sql = "INSERT INTO `apprenants`(`nomAppre`, `postnomAppre`, `prenomAppr`, `sexAppr`, `etatCivil`, 
        `lieuNaissance`, `dateNaissance`, `provinceOrigine`, `adresse`, `telephone`, `email`, `primaire`, 
        `secondaire`, `universite`, `formation_1`, `formation_2`, `formation_3`, `choix_1`, `choix_2`) 
        VALUES (:nom, :postnom, :prenom, :sexe, :etatcivil, :lieunaiss, :datenaiss, :province, :adresse, 
        :telephone, :email, :primaire, :secondaire, :universite, :form_1, :form_2, :form_3, :ch1, :ch2)";

        $stmt = $conn->prepare($sql);
    
        $stmt->bindParam(":nom", $nom);
        $stmt->bindParam(":postnom", $postnom);
        $stmt->bindParam(":prenom", $prenom);
        $stmt->bindParam(":sexe", $sexe);
        $stmt->bindParam(":etatcivil", $etatCivil);
        $stmt->bindParam(":lieunaiss", $lieuNaiss);
        $stmt->bindParam(":datenaiss", $dateNaiss);
        $stmt->bindParam(":province", $proviOrig);
        $stmt->bindParam(":adresse", $adresse);
        $stmt->bindParam(":telephone", $telephone);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":primaire", $primaire);
        $stmt->bindParam(":secondaire", $secondaire);
        $stmt->bindParam(":universite", $universite);
        $stmt->bindParam(":form_1", $form_1);
        $stmt->bindParam(":form_2", $form_2);
        $stmt->bindParam(":form_3", $form_3);
        $stmt->bindParam(":ch1", $choix_1);
        $stmt->bindParam(":ch2", $choix_2);
        $stmt->execute();

        echo("Enregistrement effectué avec succès");
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/Style.css">

    <!-- Importation SWIPERJS -->
    <link rel="stylesheet" href="package/swiper-bundle.min.css"/>
    <title>DASOD-FPM</title>
    <style></style>
</head>
<body>
  <?php require_once('Pages/navbar.php')?>

  <div class="form_agent">
<form method="post">
        <h4>Enregistrement d'un apprenant</h4>

        <div class="identite">
            <h5>IDENTITE</h5>
            <input type="text" name="nom" placeholder="Nom">
            <input type="text" name="postnom" placeholder="Postnom">
            <input type="text" name="prenom" placeholder="Prénom">
            <input type="text" name="sexe" placeholder="Sexe">
            <input type="text" name="etatCivil" placeholder="Etat civil">
            <input type="text" name="lieuNaiss" placeholder="Lieu de naissance">
            <input type="text" name="dateNaiss" placeholder="Date de naissance">
            <input type="text" name="provOrig" placeholder="Province d'origine">
            <input type="text" name="adresse" placeholder="Adresse actuelle">
            <input type="text" name="telephone" placeholder="Téléphone">
            <input type="text" name="email" placeholder="Email">
        </div>

        <div class="etudes">
            <h5>ETUDES FAITES</h5>
            <input type="text" name="primaire" placeholder="Ecole primaire">
            <input type="text" name="secondaire" placeholder="Ecole secondaire (option)">
            <input type="text" name="universite" placeholder="Parcours académique (option)">
        </div>

        <div class="autres_forms">
            <h5>AUTRES FORMATIONS</h5>
            <input type="text" name="form_1" placeholder="">
            <input type="text" name="form_2" placeholder="">
            <input type="text" name="form_3" placeholder="">
        </div>
        <br>
        <div class="post">
            <h5>FILIERE SOLLICITEE</h5>
            <input type="text" name="choix_1" placeholder="Premier choix">
            <input type="text" name="choix_2" placeholder="Second choix">
        </div>

        <button name="ajouter">Enregistrer</button>
    </form>


</div>
<!-- ================================================== FIN PIED DE PAGE =============================================================== -->

<script src="Scripts/App.js"></script>