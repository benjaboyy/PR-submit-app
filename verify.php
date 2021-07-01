<?php
    include('include/db.php');

    if($_SESSION['admin'] == '1'){
        $verify_id = intval($_GET['id']);
        
        // Query
        $sqls = "UPDATE stamina_pr SET valid='1' WHERE id='$verify_id'";
           
        // Create mysql query
        $stmt = mysqli_query($connection, $sqls);
        
        if (mysqli_query($connection, $sqls)) {            
            $melding = "Score goedgekeurd";
            header('Location: dashboard.php?melding='.$melding);
        } else {
            $message = "Error with quiry";
            mysqli_free_result($stmt);
        }
        

    }else {
        $message = "Can't update";
    }
?>

<?php echo $verify_id; ?><br>
<?php echo $message; ?><br>