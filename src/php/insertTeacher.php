<?php
session_start();
?>
<?php

  /**
     * ETML
     * Auteur: Toine Riedo
     * Date: 09.11.2020
     * Description: Page detail.php projet fil rouge module 151
     */

     include 'Database.php';
     $firstName = $_POST['firstName'];
     $lastName = $_POST['lastName'];
     $teaGender = $_POST['teaGender'];
     $nickName = $_POST['nickName'];
     $teaDescription = $_POST['teaDescription'];
     $teaSection = $_POST['teaSection'];
     $database = new Database();
     $database->insertTeacher($firstName, $lastName, $teaGender, $nickName, $teaDescription, $teaSection);


     header('Location: index.php');  
?>