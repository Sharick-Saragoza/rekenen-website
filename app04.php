<!-- SUDOKU -->

<!-- Including header -->
<?php include 'incl/header.php';?>

<link rel="stylesheet" href="stylesheets/style04.css">  

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
  <!-- Including footer -->
<?php include 'incl/footer.php';?>
    