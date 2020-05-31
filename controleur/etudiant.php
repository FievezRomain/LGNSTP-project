<?php
    require "../modele/modele.php";
    include "../vue/en-tete.php";
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $etudiant = getEtudiantById($id);
        switch($etudiant["nom"]){
            case "LEDOUX":
                include "../vue/vueEtudiantLEDOUX.php";
            break;
            case "BENDIB":
                include "../vue/vueEtudiantBENDIB.php";
            break;
            case "FIEVEZ":
                include "../vue/vueEtudiantFIEVEZ.php";
            break;
            default:
                include "../vue/vueEtudiant.php";
            break;
        }
    } else{
        $etudiants = getAllEtudiants();
        include "../vue/vueListeEtudiants.php";
    }
    
    include "../vue/footer.php";
?>