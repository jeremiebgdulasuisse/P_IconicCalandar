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
    <title>Surnom des enseignants</title>
</head>

<body>
    <div class="header"> <h1>Surnom des enseignants</h1>
    <nav class="navbar"> <h2>Zone de menu</h2> 
    <a href="index.php"> Retour à la liste</a></div>
    </nav></div>
  

    <h3>Ajouter un enseignants</h3>
    <form action="insertTeacher.php" method="POST">
    <label for="firstName">Prénom</label><br>
    <input type="text" id="firstName" name="firstName"><br>
    <label for="lastName">Nom:</label><br>
    <input type="text" id="lastName" name="lastName"><br>
    <label for="teaGender"> Sexe:</label><br>
    <select for="teaGender" name="teaGender">
    <option value="m">Homme</option>
    <option value="f">Femme</option>
    <option value="o">Autre</option>
    </select><br>
    <label for="nickName">Surnom</label><br>
    <input type="text" id="nickName" name="nickName"><br>
    <label for="Description"> Origine du surnom:</label><br>
    <textarea id="teaDescription" name="teaDescription" rows="4" cols="50"></textarea><br>
    <label for="teaSection"> Section:</label><br>
    <select for="teaSection" name="teaSection">
    <option value="1">Informatique</option>
    <option value="2">Bois</option>
    <option value="3">Electronique</option>
    <option value="4">Automatique</option>
    <option value="5">Mécanique</option>
    </select><br><br>
    <input type="submit" value="Submit">


    </form>

</body>
</html>