<!---contains all database connection & session_start--->
<?php
session_start();
$connection=mysqli_connect("localhost", "root" , "root", "bookie");
?>