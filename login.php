<?php
  include 'header.php'
  ?>


<main>

  <div class="hellosignin">

    <h1>Login</h1>
    <h2>Fill out this form with your credentials</h2>
  </div>
  <div class="loginform">
          <form action="loginprocess.php" method="POST">
            <div id="errors00">
              <?php
              echo $errormessage00;
              ?>
            <br>
            <br>
            Username: <input  class="username" type="text" name="username" value="<?php echo htmlspecialchars($_POST["username"],ENT_QUOTES);?>"> <br ><br />
            Password: <input class="password" type="password" name="password" value="<?php echo htmlspecialchars($_POST["password"],ENT_QUOTES);?>">
            <button  id="uniquebutton" type="value" class="buttonStyle">Login</button>
          </form>
        </div>




</main>
<?php
  include 'footer.php';
?>