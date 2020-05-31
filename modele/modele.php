<?php 
    function init(){
        $user = "root";
        $db = new PDO('mysql:host=localhost;dbname=pwebproject', $user, "");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }
    

    function getMatieres(){
        $db = init();
        $query = $db->prepare(
            "SELECT * from matieres"
        );
        $query->execute();
        return $query->fetchall();
    }

    function getCandidat($nom, $prenom){
        $db = init();
        $query = $db->prepare(
            "SELECT * FROM etudiant WHERE nom = :nom AND prenom = :prenom"
        );
        $query->bindParam(':nom', $nom);
        $query->bindParam(':prenom', $prenom);
        $query->execute();
        $result = $query->fetch();
        return $result;
    }

    function addCandidat($etudiant){
        $db = init();
        $query = $db->prepare(
            "INSERT INTO etudiant VALUES (0, :nom, :prenom, :adresse, :dateN, :parcours, :noteM, :noteI, :noteA, :moyenne, :lettreM, :statut)"
        );
        $nom = $etudiant->getNom();
        $query->bindParam(':nom', $nom);
        $prenom = $etudiant->getPrenom();
        $query->bindParam(':prenom', $prenom);
        $adresse = $etudiant->getNom();
        $query->bindParam(':adresse', $adresse);
        $dateN = $etudiant->getDateNaissance();
        $query->bindParam(':dateN', $dateN);
        $parcours = $etudiant->getParcours();
        $query->bindParam(':parcours', $parcours);
        $noteM = $etudiant->getNoteM();
        $query->bindParam(':noteM', $noteM);
        $noteI = $etudiant->getNoteI();
        $query->bindParam(':noteI', $noteI);
        $noteA = $etudiant->getNoteA();
        $query->bindParam(':noteA', $noteA);
        $moyenne = $etudiant->getMoyenne();
        $query->bindParam(':moyenne', $moyenne);
        $lettreM = $etudiant->getLettreM();
        $query->bindParam(':lettreM', $lettreM);
        $statut = "candidat";
        $query->bindParam(':statut', $statut);
        $query->execute();
    }

    function deleteEtudiant($nom, $prenom){
        $db = init();
        $query = $db->prepare(
            "DELETE FROM etudiant WHERE nom = :nom AND prenom = :prenom"
        );
        $query->bindParam(':nom', $nom);
        $query->bindParam(':prenom', $prenom);
        $query->execute();
    }

    function updateEtudiant($etudiant){
        $db = init();
        $query = $db->prepare(
            "UPDATE etudiant SET adresse = :adresse, dateN = :dateN, parcours = :parcours, noteMath = :noteM, noteInf = :noteI, noteAng = :noteA, moyenne = :moyenne, lettreMotivation = :lettreM WHERE nom = :nom AND prenom = :prenom"
        );
        $nom = $etudiant->getNom();
        $query->bindParam(':nom', $nom);
        $prenom = $etudiant->getPrenom();
        $query->bindParam(':prenom', $prenom);
        $adresse = $etudiant->getNom();
        $query->bindParam(':adresse', $adresse);
        $dateN = $etudiant->getDateNaissance();
        $query->bindParam(':dateN', $dateN);
        $parcours = $etudiant->getParcours();
        $query->bindParam(':parcours', $parcours);
        $noteM = $etudiant->getNoteM();
        $query->bindParam(':noteM', $noteM);
        $noteI = $etudiant->getNoteI();
        $query->bindParam(':noteI', $noteI);
        $noteA = $etudiant->getNoteA();
        $query->bindParam(':noteA', $noteA);
        $moyenne = $etudiant->getMoyenne();
        $query->bindParam(':moyenne', $moyenne);
        $lettreM = $etudiant->getLettreM();
        $query->bindParam(':lettreM', $lettreM);
        $query->execute();
    }
    function getAllEtudiants(){
        $db = init();
        $query = $db->prepare(
            "SELECT * from etudiant"
        );
        $query->execute();
        return $query->fetchall();
    }
?>