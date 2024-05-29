<!-- REKENTOOL -->

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
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <!-- Dropdown -->
          <li class="nav-item dropdown" >
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
    <!-- Container -->
    <div class="container mt-3">
      <!-- Row -->
      <div class="row">
        <!-- Col 1 -->
        <div class="col-3">
          <!-- Card Oud -->
          <div class="card" style="margin-top: 250px;">
            <div class="card-header">
              Oud
            </div>
            <div class="card-body">
              <h5 class="card-title">Denk ook aan:</h5>
              <p class="card-text">• Zonder BTW<br>• Zonder korting</p>
              <div class="mb-3">
                <input id="inp_oud" class="form-control is-invalid" onchange="checkInformation()">
              </div>
            </div>
          </div>
        </div>
        <!-- Col 2 -->
        <div class="col-4">
          <!-- Select form Kies -->
          <select id="select_soort" class="form-select mt-4 mb-3 is-invalid" onchange="checkInformation()">
          <option value="" selected>Kies*</option>
          <option value="1">verlagen</option>
          <option value="2">verkleinen</option>
          <option value="3">minder worden</option>
          <option value="4">verhogen</option>
          <option value="5">vergroten</option>
          <option value="6">meer worden</option>
        </select>
      <!-- Input form Percentage -->
        <div class="input-group mb-3">
          <span class="input-group-text">Percentage</span>
          <input id="inp_perc" type="text" class="form-control is-invalid" onchange="checkInformation()">
          <span class="input-group-text">%</span>
        </div>
      <!-- Input form Vermenigvuldegingsfactor -->
      <div class="mb-3">
          <div class="input-group">
            <span class="input-group-text" id="basic-addon3">Vermenigvuldigingsfactor: x</span>
            <input id="inp_factor" type="text" disabled class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
          </div>
        </div>
        <!-- Arrow image -->
        <div class="image">
          <img src="./img/pijlen.avif">
        </div>
        <!-- Input form Delingsfactor -->
        <div class="mb-3">
          <div class="input-group">
            <span class="input-group-text" id="basic-addon3">Delingsfactor: </span>
            <input type="text" disabled class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
          </div>
        </div>
        <!-- Button -->
        <div class="d-grid">
          <button type="button" class="btn btn-success" disabled>Success</button>
        </div>
        </div>
        <!-- Col 3 -->
        <div class="col-3">
          <!-- Card Nieuw -->
          <div class="card" style="margin-top: 250px;">
            <div class="card-header">
              Nieuw
            </div>
            <div class="card-body">
              <h5 class="card-title">Denk ook aan:</h5>
              <p class="card-text">• Zonder BTW<br>• Zonder korting</p>
              <div class="mb-3">
                <input id="inp_nieuw" class="form-control is-invalid" onchange="checkInformation()">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <!-- Scripts -->
  <script src="scripts/script04.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</html>
