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
        $fonction = $_POST["fonction"];
        $lieuAffect = $_POST["lieuAffect"];

        $sql = "INSERT INTO `agents`(`nomAgent`, `postnomagent`, `prenomAgent`, `sexAgent`, `etatCivil`, 
        `lieuNaissance`, `dateNaissance`, `provinceOrigine`, `adresse`, `telephone`, `email`, `primaire`, 
        `secondaire`, `universite`, `formation_1`, `formation_2`, `formation_3`, fonction, lieuAffect) 
        VALUES (:nom, :postnom, :prenom, :sexe, :etatcivil, :lieunaiss, :datenaiss, :province, :adresse, 
        :telephone, :email, :primaire, :secondaire, :universite, :form_1, :form_2, :form_3, :fonction, :aff)";

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
        $stmt->bindParam(":fonction", $fonction);
        $stmt->bindParam(":aff", $lieuAffect);
        $stmt->execute();

        header('location:confirmAgent.php');
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
            <h4>Enregistrement d'un agent</h4>

            <div class="identite">
                <h5>IDENTITE</h5>
                <input type="text" name="nom" placeholder="Nom">
                <input type="text" name="postnom" placeholder="Postnom">
                <input type="text" name="prenom" placeholder="Prénom">
                <select name="sexe" id="">
                    <option >Quel est votre sexe</option>
                    <option value="Masculin">Masculin</option>
                    <option value="Féminin">Féminin</option>
                </select>
                <select name="etatCivil" id="">
                    <option >Votre état civil</option>
                    <option value="Célibataire">Célibataire</option>
                    <option value="Marié.e">Marié.e</option>
                    <option value="Veuf.ve">Veuf.ve</option>
                </select>
                <input type="text" name="lieuNaiss" placeholder="Lieu de naissance">
                <input type="text" name="dateNaiss" placeholder="Date de naissance">
                <select name="provOrig" id="">
                    <option >Choisir votre province d'origine</option>
                    <option value="Bas-Uélé">Bas-Uélé</option>
                    <option value="Equateur">Equateur</option>
                    <option value="Haut-Katanga">Haut-Katanga</option>
                    <option value="Haut-Lomami">Haut-Lomami</option>
                    <option value="Haut-Uélé">Haut-Uélé</option>
                    <option value="Ituri">Ituri</option>
                    <option value="Kasaï">Kasaï</option>
                    <option value="Kasaï Central">Kasaï Central</option>
                    <option value="Kasaï Oriental">Kasaï Oriental</option>
                    <option value="Kinshasa">Kinshasa</option>
                    <option value="Kongo-Central">Kongo-Central</option>
                    <option value="Kwango">Kwango</option>
                    <option value="Kwilu">Kwilu</option>
                    <option value="Lomami">Lomami</option>
                    <option value="Lualaba">Lualaba</option>
                    <option value="Maï-Ndombe">Maï-Ndombe</option>
                    <option value="Maniema">Maniema</option>
                    <option value="Mongala">Mongala</option>
                    <option value="Nord-Kivu">Nord-Kivu</option>
                    <option value="Nord-Ubangi">Nord-Ubangi</option>
                    <option value="Sankuru">Sankuru</option>
                    <option value="Sud-Kivu">Sud-Kivu</option>
                    <option value="Sud-Ubangi">Sud-Ubangi</option>
                    <option value="Tanganyika">Tanganyika</option>
                    <option value="Tshopo">Tshopo</option>
                    <option value="Tshuapa">Tshuapa</option>
                </select>
                <input type="text" name="adresse" placeholder="Adresse actuelle">
                <input type="text" name="telephone" placeholder="Respectez ce format : +243 000000000">
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
                <input type="text" name="fonction" placeholder="Fonction">
                <input type="text" name="lieuAffect" placeholder="Lieu d'affectation">
            </div>

            <button name="ajouter">Enregistrer</button>
        </form>

    </div>
    <!-- ================================================== FIN PIED DE PAGE =============================================================== -->
    <script src="Scripts/App.js"></script>