
<?php
$title='| Password Recovery';
  require_once('common_files/header.php');
  ?>

    <section class="passContainer">
      <h2>Password Recovery</h2>
        <div class="passWrapper">
          <form action="forgotpassverify.php" method="post" class="forgotpass">
            <div class="form-element">
            <label for="email">Registered Email </label>
              <input type="email" id="email" name="email"  required />
            </div>  
            <div class="form-element">
            <label for="npass">New Password </label>
              <input type="password" id="npass" name="npass"  required />
            </div>
            <div class="form-element">
                <label for="cpass">Confirm Password</label>
              <input type="password" id="cpass" name="cpass" required/>
            </div>
            <input type="submit" value="Reset Password">
          </form>
        </div>
    </section>

     

