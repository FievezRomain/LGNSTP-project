<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../vue/js/materialize.js"></script>
        <link rel="stylesheet" href="../vue/css/materialize.css">
        <link rel="stylesheet" href="../vue/css/general.css">
    </head>
    <body>
        <div class="container">
        <div class="row">
            <?php foreach ($etudiants as $etudiant) : ?>
                
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                <img src="<?php echo $etudiant["urlImage"];?>">
                                <span class="card-title"><?php echo utf8_encode($etudiant["nom"]) . " " . utf8_encode($etudiant["prenom"]) ;?></span>
                            </div>
                            <div class="card-content">
                                <div>
                                    <p><b>Entreprise :</b> <?php echo utf8_encode($etudiant["designation"]);?></p>
                                </div>
                                <div>
                                    <p><b>Spécialité en entreprise :</b> <?php echo utf8_encode($etudiant["specialite"]);?></p>
                                </div>
                            </div>
                            <div class="card-action">
                                <a href="etudiant.php?id=<?php echo $etudiant["id"];?>">Voir plus</a>
                            </div>
                        </div>
                    </div>
                
            <?php endforeach; ?>
            </div>
        </div>
    </body>
</html>