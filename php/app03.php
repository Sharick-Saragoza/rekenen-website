<!-- SUDOKU -->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sudoku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="stylesheets/style03.css">
  <body>
    <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand">Rekenen met Sharick</a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
          <li id="navstyle" class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <!-- Dropdown -->
          <li id="navstyle" class="nav-item dropdown" >
            <a  class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Apps
            </a>
            <ul class="dropdown-menu">
              <li id="navstyle"><a class="dropdown-item" href="app01.php">Tafels</a></li>
              <li id="navstyle"><a class="dropdown-item" href="app02.php">Eenheden omrekenen</a></li>
              <li id="navstyle"><a class="dropdown-item" href="app03.php">Sudoku</a></li>
              <li id="navstyle"><a class="dropdown-item" href="app04.php">Rekentool</a></li>
            </ul>
          </li>
        </ul>
    </div>
  </nav>
    <!-- Grids -->
    <section class="container mt-4">
        <div class="row">
            <div class="col-10">
                <main id="sudoku">
                </main>
            </div>
            <div class="col-2">
                <!-- Generate Button -->
                <button type="button" class="btn btn-primary" onclick="GenereerSudoku()">Genereer</button>
                <!-- Toetsenbord Buttons -->
                <table class="table mt-4">
                    <tr>
                        <td><button class="btn btn-light" style="font-size: 42px;" onclick="selectCijfer(1)">1</button></td>
                        <td><button class="btn btn-light" style="font-size: 42px;" onclick="selectCijfer(2)">2</button></td>
                        <td><button class="btn btn-light" style="font-size: 42px;" onclick="selectCijfer(3)">3</button></td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-light" style="font-size: 42px;" onclick="selectCijfer(4)">4</button></td>
                        <td><button class="btn btn-light" style="font-size: 42px;" onclick="selectCijfer(5)">5</button></td>
                        <td><button class="btn btn-light" style="font-size: 42px;" onclick="selectCijfer(6)">6</button></td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-light" style="font-size: 42px;" onclick="selectCijfer(7)">7</button></td>
                        <td><button class="btn btn-light" style="font-size: 42px;" onclick="selectCijfer(8)">8</button></td>
                        <td><button class="btn btn-light" style="font-size: 42px;" onclick="selectCijfer(9)">9</button></td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
  </body>
  <!-- Scripts -->
  <script src="scripts/script03.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</html>
