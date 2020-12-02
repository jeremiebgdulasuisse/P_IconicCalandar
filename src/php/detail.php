
<!DOCTYPE html>
<html lang="fr-ch">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../resources/css/style.css">
    <script src="https://kit.fontawesome.com/601124620f.js" crossorigin="anonymous"></script>
    <title>Surnom des enseignants</title>
</head>
<?php
    /**
     * ETML
     * Auteur: Toine Riedo
     * Date: 09.11.2020
     * Description: Page detail.php projet fil rouge module 151
     */
include("Database.php");
$Database = new Database();


 //Connexion bd
 // Requete à la db -> table
 // Formater les données
 // se déconnecter de la bd
$id = $_GET["idTeacher"];
$teachers = $Database->getOneTeacher($id);

//var_dump($teachers);
?>

<body>
<div class="header"> <h1>Surnom des enseignants</h1>
    <nav class="navbar"> <h2>Zone de menu</h2> 
    <a href="addTeacher.php"> Ajouter un enseignant</a>
    <a href="index.php"> Retour à la liste</a></div>
    </nav></div>
    <table>
        <tr>
            <td><b>Détail:</b> <?php echo $teachers[0]["teaFirstName"] . " " . $teachers[0]["teaLastName"];?></td>
            <td><b>Surnom:</b> <?php echo $teachers[0]["teaNickname"] ?> </td>
            <td><?php if($teachers[0]['teaGender']=='o'){ echo "<i class='fas fa-transgender'></i>";} if($teachers[0]['teaGender']=='m'){ echo "<i class='fas fa-mars'></i>";} if($teachers[0]['teaGender']=='f'){ echo "<i class='fas fa-venus'></i>";}  ?></td>
        </tr>
    </table>
    
</body>
</html>

