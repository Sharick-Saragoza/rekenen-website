<!-- REKENTOOL -->

<!-- PHP Navbar -->
<?php

include "incl/header.php"

?>
  <body>

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
            </div>
          </div>
        </div>

        <!-- Col 2 -->
        <div class="col-4">
          <!-- Select form Kies -->
        <select class="form-select" aria-label="Default select example">
          <option selected>Kies*</option>
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
          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          <span class="input-group-text">%</span>
        </div>

      <!-- Input form Vermenigvuldegingsfactor -->
      <div class="mb-3">
          <div class="input-group">
            <span class="input-group-text" id="basic-addon3">Vermenigvuldigingsfactor: x</span>
            <input type="text" disabled class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
          </div>
        </div>
        
        <!-- Arrow image -->
        <div class="image">
          <img src="https://cdn.icon-icons.com/icons2/3257/PNG/512/arrow_left_right_icon_206142.png" style="height: 400px;">
        </div>

        <!-- Input form Delingsfactor -->
        <div class="mb-3">
          <div class="input-group">
            <span class="input-group-text" id="basic-addon3">Delingsfactor: </span>
            <input type="text" disabled class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
          </div>
        </div>

        <!-- Button -->
        <button type="button" class="btn btn-success" disabled>Success</button>

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
            </div>
          </div>
        </div>
      </div>

    </div>
  </body>
<!-- PHP Scripts -->
<?php

include "incl/footer.php"

?>