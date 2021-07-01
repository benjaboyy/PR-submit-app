<?php
include "include/header.php";
include "include/send_update.php";
?>
<body>
   <div class="container container-fluid">
        <h1 class="text-primary">Submit PR</h1>
        <hr/>
      <form action="" method="post">
        <div class="form-floating mb-3">
            <h4><i class="bi bi-exclamation-circle"></i> Bewijs jou score</h4>
            <p>Stuur een screenshot van jou score in de discord of whatsapp groep om jou score te bevestigen voordat hij in de PR word bevestigd. (tenzij de PR al in het verleden een keer is geverifieerd)</p>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="new_difficulty" id="new_difficulty" placeholder="Score">
          <label for="new_difficulty">Difficulty</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="new_bpm" id="new_bpm" placeholder="BPM">
          <label for="new_bpm">BPM</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="new_song_title" id="new_song_title" placeholder="Song title">
          <label for="new_song_title">Song title</label>
        </div>
        <div class="d-grid gap-2">
          <button name="submitScore" id="submitScore" class="btn btn-primary btn-lg" type="submit">Submit PR</button>
        </div>
        <br>
        <div class="d-grid gap-2">
          <a name="annuleer" id="no" href="index.php" class="btn btn-secondary btn-lg" type="button">Annuleren</a>
        </div>
      </form>
    </div>
</body>
<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</footer>