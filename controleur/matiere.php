<?php
    require "../modele/modele.php";

    $result = getMatieres();
    include '../vue/en-tete.php';
    include "../vue/vueMatiere.php";
    include '../vue/footer.php';
?>