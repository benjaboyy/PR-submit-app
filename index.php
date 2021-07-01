<?php
include "include/header.php";
?>
<body>
    <main class="form-signin">
      <form action="" method="post">
        <h1 class="text-primary">ITG STAMINA PR</h1>
        <hr/>
        <?php echo $accountNotExistErr; ?>
        <?php echo $emailPwdErr; ?>
        <?php echo $verificationRequiredErr; ?>
        <?php echo $email_empty_err; ?>
        <?php echo $pass_empty_err; ?>
        <div class="form-floating">
          <input type="email" class="form-control" name="email_signin" id="email_signin" placeholder="name@example.com">
          <label for="floatingInput">Email adres</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" name="password_signin" id="password_signin" placeholder="Password">
          <label for="floatingPassword">Wachtwoord</label>
        </div>

        <div class="checkbox mb-3">
          <p>
              <a href="signup.php">Registreren</a>
          </p>
        </div>
        <button name="login" id="sign_in" class="w-100 btn btn-lg btn-primary" type="submit">Inloggen</button>
          <p class="mt-5 mb-3 text-muted"><strong>DDR-EXP </strong>/<strong> ITGASS</strong> &copy; 2019–2021</p>
      </form>
        <!--tester_script-->
          <?php
          if($_SESSION['is_active'] == '1') { 
                header('Location: dashboard.php');
          } else {
//            $past = "wachtwoord";
//            $passy = password_hash($past, PASSWORD_BCRYPT);
//            echo $passy;
          }?> 
        
        
    </main>
</body>
<?php
include "include/footer.php";