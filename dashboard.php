<?php
    include 'include/header.php';
    include('include/get_list.php');
?>
<body>
   <div class="container">
    <h1 class="text-primary">ITG STAMINA PR</h1>
    <hr/>
    <div class="d-grid gap-2">
       <?php
           print("$output_list");
       ?>
    </div>
    </div>
</body>
<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</footer>