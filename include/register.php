<?php
   
    // Database connection
    include('include/db.php');

    
    // Error & success messages
    global $success_msg, $email_exist, $f_NameErr, $_emailErr, $_passwordErr;
    global $fNameEmptyErr, $emailEmptyErr,$passwordEmptyErr, $email_verify_err, $email_verify_success;
    
    // Set empty form vars for validation mapping
    $_user = $_email = $_password = "";

    if(isset($_POST["submitRegister"])) {
        $user       = $_POST["user"];
        $email      = $_POST["email"];
        $pass       = $_POST["password"];

        // check if email already exist
        $email_check_query = mysqli_query($connection, "SELECT * FROM stamina_pr WHERE email = '{$email}' ");
        $rowCount = mysqli_num_rows($email_check_query);


        // PHP validation
        // Verify if form values are not empty
        if(!empty($user) && !empty($email) && !empty($pass)){
            
            // check if user email already exist
            if($rowCount > 0) {
                $email_exist = '
                    <div class="alert alert-danger" role="alert">
                        User with email already exist!
                    </div>
                ';
            } else {
                // clean the form data before sending to database
                $_user = mysqli_real_escape_string($connection, $user);
                $_email = mysqli_real_escape_string($connection, $email);
                $_password = mysqli_real_escape_string($connection, $pass);

                // perform validation
                if(!preg_match("/^[a-zA-Z ]*$/", $_user)) {
                    $f_NameErr = '<div class="alert alert-danger">
                            Only letters and white space allowed.
                        </div>';
                }
                if(!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
                    $_emailErr = '<div class="alert alert-danger">
                            Email format is invalid.
                        </div>';
                }
                if(!preg_match("/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{6,20}$/", $_password)) {
                    $_passwordErr = '<div class="alert alert-danger">
                             Password should be between 6 to 20 charcters long, contains atleast one special chacter, lowercase, uppercase and a digit.
                        </div>';
                }
                
                // Store the data in db, if all the preg_match condition met
                if((preg_match("/^[a-zA-Z ]*$/", $_user)) && (filter_var($_email, FILTER_VALIDATE_EMAIL)) && (preg_match("/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/", $_password))){

                    // Generate random activation token
                    $token = md5(rand().time());

                    // Password hash
                    $password_hash = password_hash($pass, PASSWORD_BCRYPT);

                    // Query
                    $sql = "INSERT INTO stamina_pr (user, email, pass, token, is_active,
                    date) VALUES ('{$user}', '{$email}', '{$password_hash}', '{$token}', '1', now())";
                    
                    // Create mysql query
                    $sqlQuery = mysqli_query($connection, $sql);
                    
                    if (!$sqlQuery) {
                        $message = "Error with quiry";
                        mysqli_free_result($stmt);
                        die("MySQL query failed!" . mysqli_error($connection));
                        echo $user;
                        
                    } else {
                       header("Location: index.php?melding=succes");
                    }
                }
            }
        } else {
            if(empty($user)){
                $fNameEmptyErr = '<div class="alert alert-danger">
                    First name can not be blank.
                </div>';
            }
            if(empty($email)){
                $emailEmptyErr = '<div class="alert alert-danger">
                    Email can not be blank.
                </div>';
            }
            if(empty($pass)){
                $passwordEmptyErr = '<div class="alert alert-danger">
                    Password can not be blank.
                </div>';
            }            
        }
    }
?>