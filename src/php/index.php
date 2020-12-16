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
        <div id="#pbar_outerdiv">
        <div class="article" class="#pbar_outerdiv">

        <?php
            echo date('d/m/Y'). '<br>';
        ?>

        <table id="printer-table" class="table table-striped table-bordered" style="width:100%">
        <div >
        <thead>
            <tr>
                <th class="bg-primary">Lundi</th>
                <th class="bg-secondary">Mardi</th>
                <th class="bg-success">Mercredi</th>
                <th class="bg-danger">Jeudi</th>
                <th class="bg-warning">Vendredi</th>
                <th class="bg-info">Samedi</th>
                <th class="bg-light">Dimanche</th>
            </tr>
        </thead>
        </div>
        <tbody>
            <tr>
                <td class="bg-primary">gg</td>
                <td class="bg-secondary">dd</td>
                <td class="bg-success">sd</td>
                <td class="bg-danger">sas</td>
                <td class="bg-warning">sas</td>
                <td class="bg-info">sas</td>
                <td class="bg-light">sas</td>
            <tr>
            <tr>
                <td class="bg-primary">gg</td>
                <td class="bg-secondary">dd</td>
                <td class="bg-success">sd</td>
                <td class="bg-danger">sas</td>
                <td class="bg-warning">sas</td>
                <td class="bg-info">sas</td>
                <td class="bg-light">sas</td>
            <tr>
            <tr>
                <td class="bg-primary">gg</td>
                <td class="bg-secondary">dd</td>
                <td class="bg-success">sd</td>
                <td class="bg-danger">sas</td>
                <td class="bg-warning">sas</td>
                <td class="bg-info">sas</td>
                <td class="bg-light">sas</td>
            <tr>
            <tr>
                <td class="bg-primary">gg</td>
                <td class="bg-secondary">dd</td>
                <td class="bg-success">sd</td>
                <td class="bg-danger">sas</td>
                <td class="bg-warning">sas</td>
                <td class="bg-info">sas</td>
                <td class="bg-light">sas</td>
            <tr>
            <tr>
                <td class="bg-primary">gg</td>
                <td class="bg-secondary">dd</td>
                <td class="bg-success">sd</td>
                <td class="bg-danger">sas</td>
                <td class="bg-warning">sas</td>
                <td class="bg-info">sas</td>
                <td class="bg-light">sas</td>
            <tr>
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