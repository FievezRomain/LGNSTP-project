<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../vue/css/materialize.css">
        <link rel="stylesheet" href="../vue/css/general.css">
        <link rel="stylesheet" href="../vue/css/candidater.css">
        <script type="text/javascript" src="../vue/js/candidater.js"></script>
        <script type="text/javascript" src="../vue/js/materialize.js"></script>
    </head>
    <body>
        <div class="container">
          <div class="row">
            <!-- Ancienne candidature -->
            <div class="col s12 m12 l6">
              <div class="card-panel">
                <div class="row">
                  <form class="col s12" action="" method="post">
                    <div class="row">
                      <div class="input-field col s12 m6">
                        <p><?php echo $ancienEtudiant->getNom()?></p>
                        <label for="nom" class="active">Nom</label>
                      </div>
                      <div class="input-field col s12 m6">
                        <p><?php echo $ancienEtudiant->getPrenom()?></p>
                        <label for="prenom" class="active">Prénom</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <p><?php echo $ancienEtudiant->getAdresse()?></p>
                        <label for="adresse" class="active">Adresse</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12 m6">
                        <label for="dateNaissance" class="active">Date de naissance</label>
                        <p><?php echo $ancienEtudiant->getDateNaissance()?></p>
                      </div>
                      <div class="input-field col s12 m6">
                        <p><?php echo $ancienEtudiant->getParcours()?></p>
                        <label for="parcours" class="active">Parcours</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12 m6">
                        <p><?php echo $ancienEtudiant->getNoteM()?></p>
                        <label for="noteM" class="active">Note en mathématique</label>
                      </div>
                      <div class="input-field col s12 m6">
                        <p><?php echo $ancienEtudiant->getNoteI()?></p>
                        <label for="noteI" class="active">Note en informatique</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12 m6">
                        <p><?php echo $ancienEtudiant->getNoteA()?></p>
                        <label for="noteA" class="active">Note en anglais</label>
                      </div>
                      <div class="input-field col s12 m6">
                        <p><?php echo $ancienEtudiant->getMoyenne()?></p>
                        <label for="moyenne" class="active">Moyenne générale</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <p><?php echo $ancienEtudiant->getLettreM()?></p>
                        <label for="lettreMotivation" class="active">Lettre de motivation</label>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!--Nouvelle candidature-->
            <div class="col s12 m12 l6">
                <div class="card-panel">
                  <div class="row">
                    <form class="col s12" action="" method="post">
                      <div class="row">
                        <div class="input-field col s12 m6">
                          <p><?php echo $etudiant->getNom()?></p>
                          <label for="nom" class="active">Nom</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <p><?php echo $etudiant->getPrenom()?></p>
                          <label for="prenom" class="active">Prénom</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <p><?php echo $etudiant->getAdresse()?></p>
                          <label for="adresse" class="active">Adresse</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12 m6">
                          <label for="dateNaissance" class="active">Date de naissance</label>   
                          <p><?php echo $etudiant->getDateNaissance()?></p>
                        </div>
                        <div class="input-field col s12 m6">
                          <p><?php echo $etudiant->getParcours()?></p>
                          <label for="parcours" class="active">Parcours</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12 m6">
                          <p><?php echo $etudiant->getNoteM()?></p>
                          <label for="noteM" class="active">Note en mathématique</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <p><?php echo $etudiant->getNoteI()?></p>
                          <label for="noteI" class="active">Note en informatique</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12 m6">
                          <p><?php echo $etudiant->getNoteA()?></p>
                          <label for="noteA" class="active">Note en anglais</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <p><?php echo $etudiant->getMoyenne()?></p>
                          <label for="moyenne" class="active">Moyenne générale</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <p><?php echo $etudiant->getLettreM()?></p>
                          <label for="lettreMotivation" class="active">Lettre de motivation</label>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="col s12 m12 l12">
                <!-- <div class="card-panel"> -->
                    <div class="row">
                        <form class="col s12" action="" method="post" onsubmit="return confirm('Êtes-vous sûr ?');">
                            <div class="row">
                                <div class="input-field col s5">
                                    <button class="btn waves-effect waves-light left" type="submit" name="annuler">annuler
                                        <i class="mdi-content-send left"></i>
                                    </button>
                                </div>
                                <div class="input-field col s5">
                                    <button class="btn waves-effect waves-light center" type="submit" name="maj">Metre à jour
                                        <i class="mdi-content-send center"></i>
                                    </button>
                                </div>
                                <div class="input-field col s2">
                                    <button class="btn waves-effect waves-light right" type="submit" name="supprimer">Supprimer
                                        <i class="mdi-content-send right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                <!-- </div> -->
            </div>
        </div>
    </body>
</html>