
<?php

    /**
     * ETML
     * Auteur: Toine Riedo
     * Date: 09.11.2020
     * Description: Page database.php du projet fil rouge module 151
     */

 include 'config.php';

 class Database {


    // Variable de classe
    private $connector;

    /**
     * TODO: à compléter
     */
    public function __construct(){
        $user = $GLOBALS['MM_CONFIG']['database']['username'];
        $pass = $GLOBALS['MM_CONFIG']['database']['password'];
        $dbname = $GLOBALS['MM_CONFIG']['database']['dbname'];
        $host = $GLOBALS['MM_CONFIG']['database']['host'];
        $port = $GLOBALS['MM_CONFIG']['database']['port'];
        $charset = $GLOBALS['MM_CONFIG']['database']['charset'];

        try {
            $this->connector = new PDO(
                'mysql:host=' . $host . ';port=' . $port . ';dbname=' . $dbname . ";charset=" . $charset, $user, $pass,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (exception $e) {
            echo "Connexion à la base de donnée impossible veuillez réessayer plus tard";
        }
        //$this->connector = new PDO('mysql:host=localhost;dbname=db_nickname_toiriedo;charset=utf8' , 'dbNicknameUser', '.etml-');

        // TODO: Se connecter via PDO et utilise la variable de classe $connector
    }

    /**
     * TODO: à compléter
     */
    /*private function querySimpleExecute($query){

        // TODO: permet de préparer et d’exécuter une requête de type simple (sans where)
    }/*

    /**
     * TODO: à compléter
     */
    public function queryPrepareExecute($query, $binds){
        $req = $this->connector->prepare($query);
        $req->execute();

        return $req;
        
        // TODO: permet de préparer, de binder et d’exécuter une requête (select avec where ou insert, update et delete)
    }

    /**
     * TODO: à compléter
     */
    public function formatData($req){

        $result =  $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
        // TODO: traiter les données pour les retourner par exemple en tableau associatif (avec PDO::FETCH_ASSOC)
    }

    /**
     * TODO: à compléter
     */
    private function unsetData($req){

        $req->closeCursor();
    }

    /**
     * Tous les événements de la bdd
     */
    public function getAllEvents(){

        // TODO: avoir la requête sql
        $query = "SELECT * FROM t_taches";
        $req = $this->queryPrepareExecute($query, null );
        $result = $this->formatData($req);
        $this->unsetData($req);
        return $result;
    }

    /**
     * TODO: à compléter
     */
    public function getOneTeacher($id){

        $query = "SELECT * FROM t_teacher where idTeacher = ".$id." ";
        $req = $this->queryPrepareExecute($query, null );
        $result = $this->formatData($req);
        return $result;
        // TODO: récupère la liste des informations pour 1 enseignant

        // TODO: avoir la requête sql pour 1 enseignant (utilisation de l'id)
        // TODO: appeler la méthode pour executer la requête
        // TODO: appeler la méthode pour avoir le résultat sous forme de tableau
        // TODO: retour l'enseignant
    }

    public function insertTeacher($firstName, $lastName, $teaGender, $nickName, $teaDescription, $teaSection )
    {
        $query = "INSERT INTO t_teacher (teaFirstName, teaLastName, teaGender, teaNickname,teaNicknameOrigin , idSection ) VALUES ('$firstName', '$lastName', '$teaGender', '$nickName', '$teaDescription', '$teaSection')";
        $req = $this->queryPrepareExecute($query, null );
        $this->unsetData($req);

    }
 }
?>