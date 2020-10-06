<?php
    session_start();
    $errors = array();
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_SESSION['usuario'])){
        header("Location: login.php");
    }
    require_once dirname(__FILE__) . "/../templates/cabecera.php";
    require_once dirname(__FILE__) . "/juego1.php";
    require_once dirname(__FILE__) . "/juego2.php";
    require_once dirname(__FILE__) . "/juego3.php";
?>
<main role="main">
   <div class="album py-5 bg-light">
    <div class="container">
        <!--
            Calcul mitjana
        -->
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" ><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/>
                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Resultat: <?= $mitjana??'' ?></text>
            </svg>
            <div class="card-body">
                <p class="card-text"><strong>Calcul mitjana</strong>.Per acabar introdueixca numero negatiu</p>
              <div class="d-flex justify-content-between align-items-center">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" >
                  <div class="form-group row">
                      <input type="text" class="form-control <?= classError($errors,'numero') ?>" id="numero" name="numero" aria-describedby="numero">
                      <?= showError($errors,'numero') ?>
                  </div>
                    <div class="btn-group">
                      <button type="submit" name="submitMitjana" class="btn btn-sm btn-outline-secondary">Submit</button>
                        <button type="submit" name="resetMitjana" class="btn btn-sm btn-outline-secondary">Reset</button>
                    </div>
                </form>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

          <!--
           Joc diccionari
            -->
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" ><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/>
                <text x="50%" y="50%" fill="#eceeef" dy=".3em"><?php echo !isset($_SESSION['juego2']['preguntas'])?'Polse reset per iniciar':$bien?"Has encertat $bien":'No has acabat' ?></text>
            </svg>
            <div class="card-body">
                <p class="card-text"><b>Traducció</b>. Com es diuen en valencià les següents paraules.</p>

              <div class="d-flex justify-content-between align-items-center">
                  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" >
                  <div class="form-group">
                      <label for="question"><?php echo isset($_SESSION['juego2']['preguntas'])?preguntaActual($_SESSION['juego2']['respuestas']):'' ?></label>
                      <input type="hidden" name="pregunta" value="<?= preguntaActual($_SESSION['juego2']['respuestas'])?>" />
                      <input type="text" class="form-control" id="question" name="question">
                  </div>
                <div class="btn-group">
                  <button type="submit" name="submitJoc" class="btn btn-sm btn-outline-secondary">Submit</button>
                  <button type="submit" name="resetJoc" class="btn btn-sm btn-outline-secondary">Reset</button>
                </div>
                  </form>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
          <!--
            Afegir paraules al diccionari
             -->

          <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                  <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" ><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/>
                      <text x="50%" y="50%" fill="#eceeef" dy=".3em">La paraula <?= $darrera??'___' ?> ha estat afegida</text>
                  </svg>
                  <div class="card-body">
                      <p class="card-text"><strong>Afegir paraules</strong> al diccionari</p>
                      <div class="d-flex justify-content-between align-items-center">
                          <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" >
                          <div class="row">
                              <div class="col">
                                  <input type="text" class="form-control" placeholder="Anglès" name="angles">
                              </div>
                              <div class="col">
                                  <input type="text" class="form-control" placeholder="Valencià" name="valencia">
                              </div>
                          </div>
                          <div class="btn-group">
                              <button type="submit" name="submitAfegir" class="btn btn-sm btn-outline-secondary">Submit</button>
                              <button type="submit" name="resetAfegir" class="btn btn-sm btn-outline-secondary">Reset</button>
                          </div>
                          </form>
                          <small class="text-muted">9 mins</small>
                      </div>
                  </div>
              </div>
          </div>
    </div>
  </div>
</main>

</html>
