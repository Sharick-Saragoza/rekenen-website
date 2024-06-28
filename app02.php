<!-- SOM SOM MAGIE -->

<!-- Including header -->
<?php include 'incl/header.php';?>

    <main class="container">
        <!-- een grid van 1 row en 3 col -->
        <div class="row mt-5">
            <div class="col"></div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-header">
                      Som-Som-Magie
                    </div>
                    <div id="cardbody" class="card-body">
                        <!-- hier komt een grid van 4 rows en 4 cols -->
                        <div class="row">
                            <div class="col"><input id="inp_A1" type="text" class="form-control text-center" value="" disabled></div>
                            <div class="col"></div>
                            <div class="col"></div>
                            <div class="col"><input id="inp_D1" type="text" class="form-control text-center" value="" disabled></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col"></div>
                            <div class="col"><input id="opl_B2" type="text" class="form-control text-center" value="?"></div>
                            <div class="col"><input id="opl_C2" type="text" class="form-control text-center" value="?"></div>
                            <div class="col"><input id="inp_D2" type="text" class="form-control text-center" value="" disabled></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col"></div>
                            <div class="col"><input id="opl_B3" type="text" class="form-control text-center" value="?"></div>
                            <div class="col"><input id="opl_C3" type="text" class="form-control text-center" value="?"></div>
                            <div class="col"><input id="inp_D3" type="text" class="form-control text-center" value="" disabled></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col"></div>
                            <div class="col"><input id="inp_B4" type="text" class="form-control text-center" value="" disabled></div>
                            <div class="col"><input id="inp_C4" type="text" class="form-control text-center" value="" disabled></div>
                            <div class="col"></div>
                        </div>
                        <!-- hier einde grid -->
                        <!-- hier een grid met 1 row en 2 col -->
                        <div class="row">
                          <div class="col">
                            <a href="#" class="btn btn-primary mt-3 d-grid" onclick="generateProblem()">Genereer</a>
                          </div>
                          <div class="col">
                            <a href="#" class="btn btn-success mt-3 d-grid" onclick="checkOplossing()">Check</a>
                          </div>
                        </div>
                        <!-- einde grid met 1 row en 2 col -->
                    </div>
                    <div class="card-footer text-body-secondary">
                      Made by Sharick
                    </div>
                  </div>
            </div>
            <div class="col"></div>
        </div>
        <!-- einde grid van 1 row en 3 col-->
    </main>
</body>
<!-- Including footer -->
<?php include 'incl/footer.php';?>
    