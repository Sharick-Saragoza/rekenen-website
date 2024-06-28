<!-- SUDOKU -->

<!-- Including header -->
<?php include 'incl/header.php';?>

    <div class="container">
        <!-- 3 kolommen in 1 rij-->
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 mt-5 ">
                <form class="row g-3 mb-3">
                    <div class="col-4">
                        <label for="inputTafelVan" class="form-label">Welke tafel?</label>
                        <input type="number" class="form-control" id="inputtafelvan">
                    </div>
                    <div class="col-4">
                        <label for="inputTafelLengte" class="form-label">Lengte tafel</label>
                        <input type="number" class="form-control" id="inputtafellengte" value="10">
                    </div>
                    <div class="d-grid col-4" style="margin-top: 48px;">
                        <button type="button" class="btn btn-primary" onclick="displayQuestion()">Play</button>
                    </div>
                    <p id="tijd"></p>
                </form>
                <div class="card text-center">
                    <div id="tafelheader" class="card-header">
                        Tafels oefenen
                    </div>
                    <div id="tafel" class="card-body">
                        <div class="input-group mb-3">
                            <input id="inputsom" type="text" class="form-control" placeholder="Opgave" disabled>
                            <span class="input-group-text">=</span>
                            <input id="inputantwoord" type="text" class="form-control" placeholder="Antwoord">
                        </div>
                        <div class="d-grid">
                            <button type="button" class="btn btn-success" onclick="checkAnswer()">
                                Antwoord controlleren</button>
                        </div>
                        <div class="card mt-3">
                            <div class="card-body">
                                 Antwoorden goed: <p id="antwoordengoed"></p>
                            </div>
                            </div>
                    </div>
                    <div class="card-footer text-body-secondary">
                        Made by Sharick 
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <!-- Including footer -->
<?php include 'incl/footer.php';?>
    