<!-- TAFELS -->

<!-- PHP Navbar -->
<?php

include "incl/header.php"

?>
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
<!-- PHP Scripts -->
<?php


include "incl/footer.php"

?>   
    