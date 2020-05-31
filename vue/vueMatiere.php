<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../vue/js/materialize.js"></script>
        <script type="text/javascript" src="../vue/js/matiere.js"></script>
        <link rel="stylesheet" href="../vue/css/matiere.css">
        <link rel="stylesheet" href="../vue/css/materialize.css">
        <link rel="stylesheet" href="../vue/css/general.css">
    </head>
    <body>
        <div class="container">
            <ul class="collapsible">
                <?php foreach ($result as $matiere) : ?>
                    <li id="<?php echo str_replace(array(" ", "'", ","), array("","",""), utf8_encode($matiere["designation"])) ?>">
                        <div class="collapsible-header">
                            <?php
                                if($matiere["isOption"] == 1){
                                    echo utf8_encode($matiere["designation"] . " | ". $matiere["nbHeures"] . " heures" . " | Option");
                                } else{
                                    echo utf8_encode($matiere["designation"] . " | ". $matiere["nbHeures"] . " heures");
                                }
                            ?>
                        </div>
                        <div class="collapsible-body">
                            <span><?php echo str_replace(".", ". <br /><br />", utf8_encode($matiere["description"]));?></span>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </body>
</html>