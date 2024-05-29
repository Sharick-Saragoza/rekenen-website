<!-- TAFELS -->

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
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
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
  <div class="text-center">
        <h2>Genereer tafels</h2>
    </div>
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <form class="row g-3 mb-2">
                    <div class="col-md-3">
                        <label for="inputTafelvan" class="form-label">Tafel van</label>
                        <input type="number" class="form-control" id="inputTafelvan">
                    </div>
                    <div class="col-md-3">
                        <label for="inputTafeltot" class="form-label">Tafel tot</label>
                        <input type="number" class="form-control" id="inputTafeltot">
                    </div>
                    <div class="d-grid col-md-6 mt-5">
                        <button type="button" class="btn btn-primary" onclick="showTafel()">Genereer</button>
                    </div>
                </form>
                <div class="card text-center">
                    <div id="tafelheader" class="card-header">
                        Tafel van ...
                    </div>
                    <div id="tafel" class="card-body">
                    </div>
                    <div class="card-footer text-body-secondary">
                        Made by Sharick
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
  </body>
  <!-- Scripts -->
  <script src="scripts/script01.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</html>
    