<?php
    if (session_status() == PHP_SESSION_NONE  || session_id() == '') {
        session_start();
    }
    require "../modele/modele.php";
    require "../modele/etudiant.php";
    include '../vue/en-tete.php';
    if(isset($_SESSION["action"])){
        $nom = $_SESSION["nom"];
        $prenom = $_SESSION["prenom"];
        $adresse = $_SESSION["adresse"];
        $date = $_SESSION["date"];
        $parcours = $_SESSION["parcours"];
        $noteM = $_SESSION["noteM"];
        $noteI = $_SESSION["noteI"];
        $noteA = $_SESSION["noteA"];
        $moyenne = $_SESSION["moyenne"];
        $lettreM = $_SESSION["lettreM"];
        switch($_SESSION["action"]){
            case "resume":
                $etudiant = new Etudiant($nom, $prenom, $adresse, $date, $parcours, $noteM, $noteI, $noteA, $moyenne, $lettreM);
                include "../vue/vueResumeCandidature.php";
                if(isset($_POST["sauvegarder"])){
                    checkCandidature($etudiant);
                }
                if(isset($_POST["retour"])){
                    retourCandidature();
                }
                break;
            case "displayAll":
                $etudiant = new Etudiant($nom, $prenom, $adresse, $date, $parcours, $noteM, $noteI, $noteA, $moyenne, $lettreM);
                $result = getCandidat($etudiant->getNom(), $etudiant->getPrenom());
                $ancienEtudiant = new Etudiant($result[1], $result[2], $result[3], $result[4], $result[5], $result[6], $result[7], $result[8], $result[9], $result[10]);
                include "../vue/vueCandidatures.php";
                if(isset($_POST["supprimer"])){
                    deleteEtudiant($ancienEtudiant->getNom(), $ancienEtudiant->getPrenom());
                    session_destroy();
                    refresh();
                }
                if(isset($_POST["annuler"])){
                    session_destroy();
                    refresh();
                }
                if(isset($_POST["maj"])){
                    updateEtudiant($etudiant);
                    echo "<script>alert('Candidature mise à jour')</script>";
                    $_SESSION["action"] = "resume";
                    refresh();
                }
                break;
            case "modifCandidature":
                $parcours = getAllParcours();
                include "../vue/vueModifCandidature.php";
                if(isset($_POST["action"])){
                    confirmCandidature();
                }
                break;
        }
    } else{
        $parcours = getAllParcours();
        include "../vue/vueCandidater.php";
        if(isset($_POST["action"])){
            confirmCandidature();
        }
    }
    include '../vue/footer.php';
    function checkCandidature($etudiant){
        $result = getCandidat($etudiant->getNom(), $etudiant->getPrenom());
        if($result == false){
            addCandidat($etudiant);
            echo "<script>alert('Candidature en cours de validation')</script>";
        } else{
            if($result["Statut"] == "Inscrit"){
                echo "<script>alert('Vous êtes déjà inscrit !')</script>";
            } else{
                $_SESSION["action"] = "displayAll";
                refresh();
            }
        }
    }
    function retourCandidature(){
        $_SESSION["action"] = "modifCandidature";
        refresh();
    }
    function confirmCandidature(){
        $_SESSION["nom"] = $_POST["nom"];
        $_SESSION["prenom"] = $_POST["prenom"];
        $_SESSION["adresse"] = $_POST["adresse"];
        $_SESSION["date"] = $_POST["dateNaissance"];
        $_SESSION["parcours"] = $_POST["parcours"];
        $_SESSION["noteM"] = $_POST["noteM"];
        $_SESSION["noteI"] = $_POST["noteI"];
        $_SESSION["noteA"] = $_POST["noteA"];
        $_SESSION["moyenne"] = $_POST["moyenne"];
        $_SESSION["lettreM"] = $_POST["lettreM"];
        $_SESSION["action"] = "resume";
        refresh();
    }

    function refresh(){
        echo "<script type='text/javascript'>document.location.replace('candidater.php');</script>";
    }
?>