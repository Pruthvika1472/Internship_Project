<?php
    session_start();
    if(!isset($_SESSION['username'])) {
        header('location:login.php');
    }
?>
<?php
$title='| Registration';
  require_once('common_files/header.php');
?>

      <section class="regisContainer">
      <h2>Registration Form</h2>
        <div class="regisWrapper">
        <form action=" " method="post" class="myform">
            <div class="form-element">
            <label for="empid">Emp ID </label>
              <input type="text" id="empid" name="empid" required />
            </div>

            <div class="form-element">
            <label for="name">Name </label>
              <input type="text" id="name" name="name" placeholder="John Smith" required />
            </div>
      
            <div class="form-element">
              <label for="email"> Email </label>
              <input type="email" id="email" name="email" placeholder="xyz@gmail.com" required/>
            </div>

            <div class="form-element">
            <label for="phone">Phone</label>
              <input type="tel" id="phone" name="phone" placeholder="10-digit number" required/>
            </div>

            <div class="form-element">
            <label for="address">Address</label>
              <input type="textarea" id="address" name="address"placeholder="Address......." required />
            </div>

            <button type="button" onclick="submitData('insert');">Submit</button> 
        </form>
        </div>
        </section>
      
</body>
</html>
    <?php  require('js/callbacks/script.php');?>
   