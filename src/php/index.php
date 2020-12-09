<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>index</title>
    <link href="../../ressources/stylesheet.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

    <!-- Lieu    : ETML
     Auteur      : Jérémie Bussy et Toine Riedo
     Date        : 09.12.2020
     Description : Page affichant les enseigants sous forme de liste
    -->
</head>

<body>
    <?php
    include("Database.php");
        //Connexion à la bd
        //$database = new Database();

        //Récupérer tous les enseignants
        //$teachers = $database->getAllTeachers();

        //Deconnexion de la bd
    ?>

    <div class="mainContent">
        <h1>Calendrier</h1>

        <div class="article">

        <table id="printer-table" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Lundi</th>
                <th>Mardi</th>
                <th>Mercredi</th>
                <th>Jeudi</th>
                <th>Vendredi</th>
                <th>Samedi</th>
                <th>Dimanche</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($printers as $printer) {
                echo "<tr>";
                echo "<td>" . $printer['impFabriquant'] . "</td>";
                echo "<td>" . $printer['impMarque'] . "</td>";
                echo "<td>" . $printer['impModele'] . "</td>";
                echo "<td>" . $printer['impTechImpression'] . "</td>";
                echo "<td>" . $printer['impVitesseImpression'] . "</td>";
                echo "<td>" . $printer['impCapaciteBac'] . "</td>";
                echo "<td>" . $printer['impPoids'] . "</td>";
                echo "<td>" . $printer['impResolutionX'] . "</td>";
                echo "<td>" . $printer['impResolutionY'] . "</td>";
                echo "<td>" . $printer['impLongueur'] . "</td>";
                echo "<td>" . $printer['impLargeur'] . "</td>";
                echo "<td>" . $printer['impHauteur'] . "</td>";
                echo "<td>" . $printer['impPrix'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
        <script src="js/filters.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#printer-table').DataTable( {   
                    "searching": false,
					"paging": false,
                    language: {
                        url: 'json/fr_fr.json'
                    }
                }
                );
            } );
        </script>
    <footer>

    </div>

    <!-- Footer -->
    <div class="footer">
        <p>
            Copyright Jérémie Bussy - Toine Riedo - FIN2
        </p>
    </div>

</body>

</html>