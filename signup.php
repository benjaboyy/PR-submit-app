<?php 
include('include/header.php'); 
include('include/register.php'); 
?>

<!doctype html>
<html lang="nl">

<body>
    <main class="form-signin">
        <div class="vertical-center">
            <div class="inner-block">
                <form action="" method="post">
                    <h1 class="text-primary">Registreren</h1>
                    <hr/>

                    <?php echo $success_msg; ?>
                    <?php echo $email_exist; ?>
                    <?php echo $message; ?>
                    <?php echo $email_verify_err; ?>
                    <?php echo $email_verify_success; ?>

                    <div class="form-floating">
                      <input type="text" class="form-control spacings" name="user" id="user" placeholder="User">
                      <label for="floatingPassword">Gamer Tag</label>
                    </div>
                        <?php echo $fNameEmptyErr; ?>
                        <?php echo $f_NameErr; ?>
                    <div class="form-floating">
                      <input type="email" class="form-control spacings" name="email" id="email" placeholder="Email">
                      <label for="floatingPassword">Email</label>
                    </div>
                        <?php echo $_emailErr; ?>
                        <?php echo $emailEmptyErr; ?>                    
                    <div class="form-floating">
                      <input type="password" class="form-control spacings" name="password" id="password" placeholder="Password">
                      <label for="floatingPassword">Wachtwoord</label>
                    </div>
                        <?php echo $_passwordErr; ?>
                        <?php echo $passwordEmptyErr; ?>
                    <div class="checkbox mb-3">
                      <p>
                          <a href="index.php">Terug naar inloggen</a>
                      </p>
                    </div>
                    <button type="submit" name="submitRegister" id="submitRegister" class="w-100 btn btn-lg btn-primary">Sign up
                    </button>
                    <p class="mt-5 mb-3 text-muted"><strong>DDR-EXP </strong>/<strong> ITGASS</strong> &copy; 2019–2021</p>
                </form>
            </div>
        </div>
    </main>

</body>

</html>