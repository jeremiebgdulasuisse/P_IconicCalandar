<?php
session_start();
    /**
     * ETML
     * Auteur: Toine Riedo
     * Date: 09.11.2020
     * Description: Page index projet fil rouge module 151
     */
?>

<!DOCTYPE html>
<html lang="fr-ch">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../resources/css/style.css" type=text/css>
    <script src="https://kit.fontawesome.com/601124620f.js" crossorigin="anonymous"></script>
    <title>Surnom des enseignants</title>
</head>
<?php
include("Database.php");

$Database = new Database();


 //Connexion bd
 // Requete à la db -> table
 // Formater les données
 // se déconnecter de la bd
$teachers = $Database->getAllTeachers();


 ?> 
<body>
    <div class="header"> <h1>Surnom des enseignants</h1>
    <nav class="navbar"> <h2>Zone de menu</h2> 
    <a href="addTeacher.php"> Ajouter un enseignant</a></div>
    </nav></div>
  

    <h3>Listes des enseignants</h3>
    <table style="width: 100%;" >
        <tr style="text-align: left;">
            <th>Nom</th>
            <th>Surnom</th> 
            <th>Options</th>
        </tr>
        <hr>
        <tr>
            <?php foreach ($teachers as $teacher) {
                echo "<tr>";
                echo "<td>" . $teacher["teaLastName"] . " " .  $teacher["teaFirstName"] . "</td>";
                echo "<td>" . $teacher["teaNickname"] . "</td>";
                echo '<td> <a class="far fa-question-circle" href="detail.php?idTeacher=' . $teacher["idTeacher"] . '"> </a> </td>';
                echo "</tr>";
            }  
            ?>
            
        </tr>
    </table>

</body>
</html>