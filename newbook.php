<?php
	include 'global.php';
  if ((!(isset($_SESSION['username'])) && $_G_NO_LOGIN != true)) {
    $errormessagenewbook = "*Must be an admin to create a new book";
    include('viewbooks.php');
  }else{


?>
<?php
  include 'header.php';
?>
<main>

  <div class="hellosignin">

    <h1>Create/Edit Book</h1>
    <h2>Fill out this form to create or edit a book</h2>
  </div>
  <div class="loginform">
  	  	     <div id="errors1">
                <?php
                 echo $errormessagetitle;
                ?>
            </div>
            <div id="errors2">
                <?php
                echo $errormessageauthor;
                ?>
            </div>
            <div id="errors3">
                <?php
                echo $errormessageyear;
                ?>
            </div>
            <div id="errors4">
                <?php 
                echo $errormessagegenre;
                ?>
            </div>
          <form action="newbookprocess.php" method="POST">
            EDIT ID: <input placeholder="EDIT ID" class="id" type="text" name="id" value="<?php echo htmlspecialchars($_POST["id"],ENT_QUOTES);?>"/>
            Title: <input  placeholder="TITLE" class="title" type="text" name="title" value="<?php echo htmlspecialchars($_POST["title"],ENT_QUOTES);?>"/>
            Author: <input placeholder="AUTHOR" class="author" type="text" name="author"value="<?php echo htmlspecialchars($_POST["author"],ENT_QUOTES);?>"/>
            Year: <input placeholder="YEAR" class="year" type="text" name="year" value="<?php echo htmlspecialchars($_POST["year"],ENT_QUOTES);?>"/>
            Genre: <input placeholder="GENRE" class="genre" type="text" name="genre" value="<?php echo htmlspecialchars($_POST["genre"],ENT_QUOTES);?>"/>
            <button  id="uniquebutton2" type="value" class="buttonStyle">Submit</button>
          </form>
        </div>




</main>
<?php
}
?>