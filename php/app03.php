<!-- SUDOKU -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sudoku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="sudoku-style.css">
  <body>
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
                <a href="index.php"><button type="button" class="btn btn-danger">Home</button></a>
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
<!-- PHP Scripts -->
<?php

include "incl/footer.php"

?>


