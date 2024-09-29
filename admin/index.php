<?php
    require_once('../backend/connexion.php');

    if(isset($_POST["ajouter"]))
    {
        $idCateg = $_POST['id'];
        $designCateg = $_POST['design'];

        $sql = "INSERT INTO `categories`(`idCateg`,`designcateg`) VALUES (:idCateg, :designCateg)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":idcateg", $idCateg);
        $stmt->bindParam(":designCateg", $designCateg);
        $stmt->execute();

        echo("Enregistrement effectué avec succès");
    }


    $donnees = "SELECT * FROM categories";
    $categ = $conn->query($donnees);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="id">
        <input type="text" name="design">
        <button name="ajouter">Ajouter</button>
    </form>

    <br>

   
    <table>
        <tr>
            <td>ID</td>
            <td>DESIGN</td>
        </tr>

        <?php foreach($categ as $cat) {?>
        <tr>
            <td><?=$cat->idCateg?></td>
            <td><?=$cat->designCateg?></td>
        </tr>
        <?php }?>
    </table>
</body>
</html>