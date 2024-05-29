<!-- EENHEDEN OMREKENEN -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Stylesheet-->
  <link rel="stylesheet" href="stylesheets/style.css">
  <!-- Bootstrap  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>Reken app</title>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand">Rekenen met Sharick</a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Apps
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="app01.php">Tafels</a></li>
              <li><a class="dropdown-item" href="app02.php">Eenheden omrekenen</a></li>
              <li><a class="dropdown-item" href="app03.php">Sudoku</a></li>
              <li><a class="dropdown-item" href="app04.php">Rekentool</a></li>
            </ul>
          </li>
        </ul>
    </div>
  </nav>
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
  <!-- Scripts -->
  <script src="scripts/script02.js"></script>
  <script src="scripts/script02.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</html>

