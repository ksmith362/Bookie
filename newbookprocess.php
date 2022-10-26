<?php 

include ("global.php");

$id = intval($_POST["id"]);


$title=mysqli_real_escape_string($connection, $_POST["title"]);


$author=mysqli_real_escape_string($connection, $_POST["author"]);



$year=mysqli_real_escape_string($connection, $_POST["year"]);

$genre=mysqli_real_escape_string($connection, $_POST["genre"]);

 

 

if(strlen($_POST['title']) < 1)
    $errormessagetitle = "Please enter a title";
    

if(strlen($_POST['author']) < 1)
    $errormessageauthor = "Please enter an author";
    

if(strlen($_POST['year']) < 1)
    $errormessageyear = "Please enter a year";

if(strlen($_POST['genre']) < 1){
    $errormessagegenre = "Please enter a genre";
include("newbook.php");

}else{

if($errormessagetitle == "" && $errormessageauthor == "" && $errormessageyear == "" && $errormessagegenre == "")

if ($id == 0) { //this means it is a new record
    mysqli_query($connection,"INSERT INTO books (title, author, year, genre) values ('$title','$author','$year','$genre')") or die("Unable to run query");
    header('Location: bookadded.php');
} else { //otherwise it must be an existing record
    mysqli_query($connection,"UPDATE books SET title = '$title', author = '$author', year = '$year', genre = '$genre' where id = '$id'") or die("Unable to run query");
    header('Location: bookedited.php');

}
      }




?>


