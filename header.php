<?php
  include 'global.php'
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookie</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/motion-ui.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Noto+Serif+Telugu:wght@900&display=swap" rel="stylesheet">
</head>

<body>


    <header>
  <div class="topnavheader grid-x align-middle">
    <div class="cell small-6 medium-3">
      <a href="index.php" class="logo"><img src="img/logo.jpeg" alt="Bookie Logo"></a>
    </div>
    <div class="cell small-6 medium-9 text-right">
      <ul class="menu align-right show-for-medium">
        <li><a href="https://www.youtube.com/watch?v=cdMQw0HHszU&ab_channel=VideoCentral">Click for Surprise</a></li>
        <li><a href="viewbooks.php">View Books</a></li>
        <li><a href="newbook.php">Create/Edit Book</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="signoutprocess.php">Sign Out</a></li>
        <li><form action="booktitlesearch.php" method="POST">
          <input type="text" placeholder="SEARCH BY TITLE" name="booktitlesearch">
          <button name="submit-search" class="search">Search</button>
        </form>
      </ul>
      <button class="show-for-small-only">Menu</button>
      
    </div>
  </div>
</header>