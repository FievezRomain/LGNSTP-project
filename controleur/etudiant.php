<?php
    require "../modele/modele.php";
    include "../vue/en-tete.php";
    $etudiants = getAllEtudiants();
    include "../vue/vueListeEtudiants.php";
    include "../vue/footer.php";
?>