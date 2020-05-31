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
            <!-- Form with placeholder -->
            <div class="col s12 m12 l10 offset-l1">
              <div class="card-panel">
                <!-- <h4 class="header2">Candidater au Master MIAGE</h4> -->
                <div class="row">
                  <form class="col s12" action="" method="POST" onsubmit="return checkForm();">
                    <div class="row">
                      <div class="input-field col s12">
                        <input type="text" name="nom" id="nom" required>
                        <label for="nom" class="active">Nom</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input type="text" name="prenom" id="prenom" required>
                        <label for="prenom" class="active">Prénom</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input type="text" name="adresse" id="adresse" required>
                        <label for="adresse" class="active">Adresse</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <div>
                            <label for="dateNaissance" class="active">Date de naissance</label>
                        </div>
                        <input type="date" name="dateNaissance" id="dateNaissance" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <select name="parcours" required>
                            <option value="" disabled selected>Choisissez votre parcours</option>
                            <option value="Licence">Licence</option>
                        </select>
                        <label for="parcours" class="active">Parcours</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input type="number" name="noteM" id="noteM" required>
                        <label for="noteM" class="active">Note en mathématique</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input type="number" name="noteI" id="noteI" required>
                        <label for="noteI" class="active">Note en informatique</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input type="number" name="noteA" id="noteA" required>
                        <label for="noteA" class="active">Note en anglais</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input type="number" name="moyenne" id="moyenne" required>
                        <label for="moyenne" class="active">Moyenne générale</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <textarea class="form-control materialize-textarea" name="lettreM" id="lettreMotivation" rows="20" required></textarea>
                        <label for="lettreMotivation" class="active">Lettre de motivation</label>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <button class="btn waves-effect waves-light right" type="submit" name="action">Candidater
                            <i class="mdi-content-send right"></i>
                          </button>
                        </div>
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