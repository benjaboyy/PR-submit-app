<?php
          
if($_SESSION['valid'] == '1'){
       // Query
        $scores = "SELECT * From stamina_pr WHERE valid = '1'";
        $query_scores = mysqli_query($connection, $scores);
//        $result = $mysqli->query($scores);
        
        // If query fails, show the reason 
        if(!$query_scores){
           die("SQL query failed: " . mysqli_error($connection));
        }
        
       // Create mysql query
        while($row = mysqli_fetch_array($query_scores)) {
            $id_scores            = $row['id'];
            $tag                  = $row['user'];
            $song                 = $row['song'];
            $bpm                  = $row['bpm'];
            $difficulty           = $row['difficulty'];
            
            $output_list .= '
                    <div id="'.$id_scores.'" class="card border-primary">
                      <div class="card-body">
                        <table class="table table-borderless">
                            <tr>
                                <td>
                                    <div style="margin-right: 20px; width: 55px; height: 55px; margin-bottom: 0 !important; padding: 8px !important;   " class=" rounded float-start p-3 mb-2 bg-primary text-white"><center><span class="mx-auto" style="font-size: 21pt;">20</span></center>

                                    </div>
                                    <h5 class="card-title">'.$tag.'</h5>
                                    <h6 style="margin-bottom:0 !important;" class="card-subtitle mb-2 text-muted">'.$song.'</h6>
                                </td>
                                <td style="vertical-align: middle; width: 40%;">
                                    <span style="font-size: 20pt;">BPM: '.$bpm.'</span>
                                </td>
                            </tr>
                        </table>
                      </div>
                    </div>
                    ';
        }
}

?>