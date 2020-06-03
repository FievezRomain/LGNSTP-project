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
            "SELECT etudiant.id, nom, prenom, adresse, dateN, parcours.designation AS parcours, noteMath, noteInf, noteAng, moyenne, lettreMotivation, urlImage, idStatut, idStage, idEntreprise 
            FROM etudiant 
            JOIN parcours on parcours.id = etudiant.idParcours
            WHERE nom = :nom AND prenom = :prenom"
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
            "INSERT INTO etudiant (nom, prenom, adresse, dateN, idParcours, noteMath, noteInf, noteAng, moyenne, lettreMotivation, idStatut) VALUES (:nom, :prenom, :adresse, :dateN, :idParcours, :noteM, :noteI, :noteA, :moyenne, :lettreM, :statut)"
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
        $idParcours = getIdParcoursByName($parcours);
        $query->bindParam(':idParcours', $idParcours["id"]);
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
        $statut = 2;
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
            "UPDATE etudiant SET adresse = :adresse, dateN = :dateN, idParcours = :parcours, noteMath = :noteM, noteInf = :noteI, noteAng = :noteA, moyenne = :moyenne, lettreMotivation = :lettreM WHERE nom = :nom AND prenom = :prenom"
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
        $idParcours = getIdParcoursByName($parcours);
        $query->bindParam(':parcours', $idParcours["id"]);
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
            "SELECT etudiant.id, nom, prenom, adresse, dateN, parcours.designation AS parcours, noteMath, noteInf, noteAng, moyenne, lettreMotivation, urlImage, entreprise.designation, stage.specialite from etudiant
            JOIN stage on stage.id = etudiant.idStage
            JOIN entreprise on entreprise.id = etudiant.idEntreprise
            JOIN parcours on parcours.id = etudiant.idParcours
            WHERE idStatut = 1"
        );
        $query->execute();
        return $query->fetchall();
    }

    function getEtudiantById($id){
        $db = init();
        $query = $db->prepare(
            "SELECT etudiant.id, nom, prenom, adresse, dateN, parcours.designation AS parcours, noteMath, noteInf, noteAng, moyenne, lettreMotivation, urlImage, entreprise.designation, stage.specialite from etudiant
            JOIN stage on stage.id = etudiant.idStage
            JOIN entreprise on entreprise.id = etudiant.idEntreprise
            JOIN parcours on parcours.id = etudiant.idParcours
            WHERE etudiant.id = :id"
        );
        $query->bindParam(':id', $id);
        $query->execute();
        $result = $query->fetch();
        return $result;
    }

    function getAllParcours(){
        $db = init();
        $query = $db->prepare(
            "SELECT * from parcours"
        );
        $query->execute();
        return $query->fetchall();
    }

    function getIdParcoursByName($designation){
        $db = init();
        $query = $db->prepare(
            "SELECT id from parcours
            WHERE designation = :designation"
        );
        $query->bindParam(':designation', $designation);
        $query->execute();
        $result = $query->fetch();
        return $result;
    }
?>