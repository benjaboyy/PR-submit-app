<?php
include "include/header.php";
?>
<body>
   <div class="container container-fluid">
        <h1 class="text-primary">Submit PR</h1>
        <hr/>
      <form>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" placeholder="Score">
          <label for="floatingInput">Score</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingPassword" placeholder="BPM">
          <label for="floatingPassword">BPM</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingPassword" placeholder="Song title">
          <label for="floatingPassword">Song title</label>
        </div>
        <div class="form-floating mb-3">
            <h4><i class="bi bi-exclamation-circle"></i> Bewijs jou score</h4>
            <p>Stuur een screenshot van jou score in de discord of whatsapp groep om jou score te bevestigen voordat hij in de PR word gezet</p>
        </div>
        <div class="d-grid gap-2">
          <button class="btn btn-primary btn-lg" type="button">Submit PR</button>
        </div>
      </form>
    </div>
</body>
<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</footer>