<?php 

include ("global.php");

if ((!(isset($_SESSION['username'])) && $_G_NO_LOGIN != true)) {
    $errormessageadmin = "*Must be an admin to delete/edit/add books";
    include('viewbooks.php');
}else{

$id = intval($_GET["id"]);

mysqli_query($connection,"DELETE FROM books WHERE id = $id");

header("Location: bookdeleted.php");

}
?>


//sanitize user input
$id = intval($_GET["id"]);

//execute the query
mysqli_query($connection,"delete from pets where id = $id");

//redirect to listing page
header("Location: pet_list.php");