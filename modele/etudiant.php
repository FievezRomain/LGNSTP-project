<?php
    class Etudiant{
        private $nom;
        private $prenom;
        private $adresse;
        private $dateN;
        private $parcours;
        private $noteM;
        private $noteI;
        private $noteA;
        private $moyenne;
        private $lettreM;

        function __construct($nom, $prenom, $adresse, $dateN, $parcours, $noteM, $noteI, $noteA, $moyenne, $lettreM){
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->adresse = $adresse;
            $this->dateN = $dateN;
            $this->parcours = $parcours;
            $this->noteM = $noteM;
            $this->noteI = $noteI;
            $this->noteA = $noteA;
            $this->moyenne = $moyenne;
            $this->lettreM = $lettreM;
        }

        function getNom(){
            return $this->nom;
        }
        function getPrenom(){
            return $this->prenom;
        }
        function getAdresse(){
            return $this->adresse;
        }
        function getDateNaissance(){
            return $this->dateN;
        }
        function getParcours(){
            return $this->parcours;
        }
        function getNoteM(){
            return $this->noteM;
        }
        function getNoteI(){
            return $this->noteI;
        }
        function getNoteA(){
            return $this->noteA;
        }
        function getMoyenne(){
            return $this->moyenne;
        }
        function getLettreM(){
            return $this->lettreM;
        }
    }
?>