<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../vue/css/materialize.css">
        <link rel="stylesheet" href="../vue/css/general.css">
        <link rel="stylesheet" href="../vue/css/etudiant.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script type="text/javascript" src="../vue/js/materialize.js"></script>
    </head>
    <body>
        <div class="container">
          <div class="row">
            <!-- Form with placeholder -->
            <div class="col s12 m12 l10 offset-l1">
              <div class="card-panel">
                <!-- <h4 class="header2">Candidater au Master MIAGE</h4> -->
                <div class="row">
                  <form class="col s12" action="" method="POST">
                    <div class="row">
                        <div class="col s3 right">
                            <div class="card">
                                <div class="card-image">
                                    <a href="https://www.palatine.fr/"><img src="../vue/ressources/banque_palatine.jpg"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row center">
                        <div class="col s4 offset-s4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="<?php echo $etudiant["urlImage"];?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row center">
                        <div class="col s2 offset-s4">
                            <h4><?php echo $etudiant["nom"];?></h4>
                        </div>
                        <div class="col s2">
                            <h4><?php echo $etudiant["prenom"];?></h4>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col s4">
                        <p><b>Parcours: </b><?php echo utf8_encode($etudiant["parcours"]);?></p>
                      </div>
                      <div class="col s4">
                        <p><b>Société d'accueil: </b><?php echo $etudiant["designation"];?></p>
                      </div>
                      <div class="col s4">
                        <p><b>Spécialité en entreprise: </b><?php echo utf8_encode($etudiant["specialite"]);?></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col s3">
                        <p><b>Note de mathématique: </b><?php echo utf8_encode($etudiant["noteMath"]);?></p>
                      </div>
                      <div class="col s3">
                        <p><b>Note d'informatique: </b><?php echo utf8_encode($etudiant["noteInf"]);?></p>
                      </div>
                      <div class="col s3">
                        <p><b>Note d'anglais: </b><?php echo utf8_encode($etudiant["noteAng"]);?></p>
                      </div>
                      <div class="col s3">
                        <p><b>Moyenne générale: </b><?php echo utf8_encode($etudiant["moyenne"]);?></p>
                      </div>
                    </div>
                    <div class="row center">
                      <div class="col s12">
                        <a href="../vue/ressources/CVLOUIS.pdf" download="CV.pdf"><i class="material-icons medium">picture_as_pdf</i></a>
                        <p><b>CV.pdf</b></p>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </body>
</html>