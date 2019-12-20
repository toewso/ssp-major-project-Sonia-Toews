<?php
require_once("conn.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/19b446f9fb.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/styles.css">
    <title>Design Hut</title>
  </head>
    <nav class="navbar navbar-expand-lg navbar-fixed-top">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php"> <img src="/Assests/logo2.png" class="w-50"></a>
      </div>
        <button class="navbar-toggler ml-auto hidden-sm-up float-xs-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>
      <div class="collapse navbar-collapse justify-content-end text-right" id="navbarTogglerDemo02">
        <ul class="navbar-nav mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="http://<?php echo $_SERVER['SERVER_NAME'];?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/members.php">Discover Artists</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/articles.php">Projects</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              My Account
            </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="nav-text" href="profile.php">
              <i class="fa fa-fw fa-user fa-lg"></i>
              My Profile
            </a>
            <a class="nav-text" href="add_post.php">
              <i class="fas fa-image fa-lg"></i>
              Add Project
            </a>
            <a class="nav-text" class="log" href="/actions/login.php?action=logout">
              <i class="fas fa-sign-out-alt fa-lg"></i>
              Logout
            </a>
          </div>
        </li>
      </ul>
      <div class="search-container">
      <form action="/members.php" autocomplete="on" class="input-group">
        <input name="search" class="form-control" id="search" type="search" placeholder="Search" aria-label="Search" value="<?php echo (isset($_GET["search"])) ? $_GET["search"] : ""; ?>">
        <div class="input-group-append"> <button type="submit" id="submit"><i class="fa fa-search"></i></button></div>
      </form>
      </div>
    </div>
  </nav>
 

<body>