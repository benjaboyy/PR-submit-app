<?php

    if(isset($_POST['submitScore'])) {
        $new_difficulty         = $_POST["new_difficulty"];
        $new_bpm                = $_POST["new_bpm"];
        $new_song_title         = $_POST["new_song_title"];
        
        // Query
        $sqls = "UPDATE stamina_pr SET difficulty='$new_difficulty',bpm='$new_bpm',song='$new_song_title',valid='0' WHERE id='{$_SESSION['id']}'";
           
        // Create mysql query
        $stmt = mysqli_query($connection, $sqls);
        
        if (mysqli_query($connection, $sqls)) {
            $message = "Account updated";
            header('Location: dashboard.php?updated=true');
        } else {
            $message = "Error with quiry";
            mysqli_free_result($stmt);
        }
        

    }else {
        $message = "Can't update";
    }
?>

<?php echo $_SESSION['id']; ?><br>
<?php echo $message; ?><br>
<?php echo $new_difficulty; ?><br>
<?php echo $new_bpm; ?><br>
<?php echo $new_song_title; ?><br>

<!--
UPDATE users SET tag='Behy' WHERE id='1'
UPDATE users SET email='benjaboyy@hotmail.nl' WHERE id='1'
-->


<!--

-->