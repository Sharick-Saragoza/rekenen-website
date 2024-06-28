<!-- EENHEDEN OMREKENEN -->

<!-- Including header -->
<?php include 'incl/header.php';?>

  <!-- Grids -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-3"></div>
      <div class="col-6">
        <!-- Card -->
        <div class="card text-center">
          <div class="card-header">
            Eenheden omrekenen
          </div>
          <div class="card-body">
            <select id="dim-select" class="form-select">
              <option value="1">1D (lengte)</option>
              <option value="2">2D (oppervlakte)</option>
              <option value="3">3D (inhoud)</option>
            </select>
            <div class="row mt-2">
              <div class="col-5">
                <div class="input-group mb-3">
                  <input id="inp_left" type="text" class="form-control" placeholder="opgave" disabled>
                  <span id="eenh_left" class="input-group-text"></span>
                </div>
              </div>
              <div class="col-1">=</div>
              <div class="col-6">
                <div class="input-group mb-3">
                  <input id="inp_right" type="text" class="form-control" placeholder="antwoord">
                  <span id="eenh_right" class="input-group-text"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col text-start">
                <a href="#" class="btn btn-primary" onclick="makeProblem()">Genereer</a>
              </div>
              <div class="col text-end">
                <a href="#" class="btn btn-success" onclick="checkSolution()">Check</a>
              </div>
            </div>
          </div>
          <div class="card-footer text-body-secondary">
            Made by Sharick
          </div>
        </div>
      </div>
    </div>
  </div>
  </body>
<!-- Including footer -->
<?php include 'incl/footer.php';?>
    

