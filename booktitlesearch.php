<?php
	include 'header.php';


	$booktitlesearch = mysqli_real_escape_string($connection, $_POST['booktitlesearch']);


	$sql = "SELECT * FROM books WHERE title LIKE '%$booktitlesearch%'" or die("Unable to run query");
	$result = mysqli_query($connection, $sql);
	$queryResult = mysqli_num_rows($result);
	
	if ($queryResult > 0) {
		while ($row = mysqli_fetch_assoc($result)) {

	echo "<section class='books'>
            <div class='grid-container'>
                <div class='grid-x'>
                    <div class='cell'>
                    </div>
                </div>
                <div class='grid-x grid-margin-x grid-margin-y'>
                    <div class='cell medium-2'>
                        <div class='book'>
                          <h2>Edit ID</h2>
                            <p>".$row["id"]."</p>
                        </div>
                    </div>
                    <div class='cell medium-2'>
                        <div class='book'>
                          <h2>Title</h2>
                            <p>".$row["title"]."</p>
                        </div>
                    </div>
                    <div class='cell medium-2'>
                        <div class='book'>
                          <h2>Author</h2>
                          <p>".$row["author"]."</p>
                        </div>
                    </div>
                    <div class='cell medium-2'>
                        <div class='book'>
                          <h2>Year</h2>
                          <p>".$row["year"]."</p>
                        </div>
                    </div>
                    <div class='cell medium-2'>
                        <div class='book'>
                          <h2>Genre</h2>
                          <p>".$row["genre"]."</p>
                        </div>
                    </div>
                    </div>
                    </div>
                    </section>";

}
}else{
	echo "<h2 class='booknotfoundmessage'>No book(s) found.</h2>";
}





/*	include 'header.php';
$booktitlesearch = $_GET["booktitlesearch"];

$booktitlesearch = mysql_real_escape_string(_GET['$booktitlesearch']);

$raw_results = mysqli_query("SELECT * FROM books WHERE title LIKE '%".$booktitlesearch."%'") or die(mysql_error());

if (mysqli_num_rows($raw_results) > 0){
	while($results = mysql_fetch_array($raw_results))


?>

	<h2><?php echo $results;?></h2>








}
*/
