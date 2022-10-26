<?php 
	include 'header.php';
?>
 <div class="adminerror">
    <h2><?php echo $errormessageadmin;?></h2>
    <h2><?php echo $errormessagenewbook;?></h2>
 </div>
                        
<?php 


  $connection=mysqli_connect("localhost", "root" , "root", "bookie");
  //displays the books
  $res=mysqli_query($connection,"select * from books ORDER BY title");
  while($row=mysqli_fetch_assoc($res)){


?>
                        
        <section class="books">
            <div class="grid-container">
                <div class="grid-x">
                    <div class="cell">
                    </div>
                </div>
                <div class="grid-x grid-margin-x grid-margin-y">
                    <div class="cell medium-2">
                        <div class="book">
                          <h2>Edit ID</h2>
                            <p><?php echo $row["id"];?></p>
                        </div>
                    </div>
                    <div class="cell medium-2">
                        <div class="book">
                          <h2>Title</h2>
                            <p><?php echo $row["title"];?></p>
                        </div>
                    </div>
                    <div class="cell medium-2">
                        <div class="book">
                          <h2>Author</h2>
                          <p><?php echo $row["author"];?></p>
                        </div>
                    </div>
                    <div class="cell medium-2">
                        <div class="book">
                          <h2>Year</h2>
                          <p><?php echo $row["year"];?></p>
                        </div>
                    </div>
                    <div class="cell medium-2">
                        <div class="book">
                          <h2>Genre</h2>
                          <p><?php echo $row["genre"];?></p>
                        </div>
                    </div>
                        <div class="cell medium-2">
                        <div class="bookmodify">
                            <h2>Modify</h2>
                          <a id="deletebook" href="deletebookprocess.php?id=<?php echo $row["id"];?>">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
</section>
              <?php 
}
  ?>
        
        <?php 
        include 'footer.php';
        ?>
