<?php
    $melding = $_GET['melding'];
    include 'include/header.php';
    include('include/get_list_admin.php');
    include('include/get_list.php');
?>
<body>
   <div class="container">
    <h1 class="text-primary">ITG STAMINA PR</h1>
    <hr/>
    <?php
    if (isset($melding)) {
        ?>
            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
              <?php echo $melding; ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>    
        <?php
    }
    ?>
    
    <div class="d-grid gap-2">
       <?php
           print("$output_list");
       ?>
    </div>
    <br>
    <div class="d-grid gap-2">
      <a name="annuleer" id="no" href="submit.php" class="btn btn-primary btn-lg" type="button">Nieuwe score opgeven</a>
    </div>
    <br>
    <div class="d-grid gap-2">
      <a name="annuleer" id="no" href="sign_out.php" class="btn btn-secondary btn-lg" type="button">Uitloggen</a>
    </div>
   </div>
</body>

          <?php
          if(empty($_SESSION['is_active'])) { 
                header('Location: index.php');
          } ?> 
<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</footer>