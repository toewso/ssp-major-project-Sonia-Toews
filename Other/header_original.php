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


  <nav class="nav navbar-expand-lg">
     <a class="navbar-brand nb" href="index.php">
          <img src="/assests/logotransparent1.png" class="w-50">
      </a>
      
      

      <!--SEARCH-->
 
     <!-- <form action="/members.php" class="my-lg-0 input-group col-md-3 " id="search_container">
        <input name="search" class="form-control" id="search" type="search" placeholder="Search" aria-label="Search" value="<?php echo (isset($_GET["search"])) ? $_GET["search"] : ""; ?>">
        <button type="submit" id="submit"><i class="fa fa-search"></i></button>
      </form>
    
     
     <form action="/articles.php" class="my-lg-0 input-group col-md-3" id="search_container">
        <input name="search" class="form-control" id="search" type="search" placeholder="Search" aria-label="Search" value="<?php echo (isset($_GET["search"])) ? $_GET["search"] : ""; ?>">
        <button type="submit" id="submit"><i class="fa fa-search"></i></button>
      </form>  -->
      

  
      <!--COLLAPSE-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="fas fa-bars"></i></span>
      </button>


    

      <!--DROPDOWN-->
      <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>">Home</a>
          </li>
          <?php
          if(isset($_SESSION["user_id"])) : //check if user is logged in
          ?>
          <li class=""nav-item>
            <a href="/members.php" class="nav-link">Discover</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            My Account
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" href="profile.php">
             <i class="fa fa-fw fa-user"></i>
                Profile
             </a>
              <a class="dropdown-item" href="add_post.php">
              <i class="fas fa-image"></i>
                Add Project</a>
              <a class="dropdown-item" href="articles.php">
              <i class="fa fa-fw fa-newspaper"></i>
                My Projects</a>
              <a class="dropdown-item" href="#">
              <i class="fas fa-heart"></i>
                Favorites</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/actions/login.php?action=logout">Logout</a>
             
            </div>
          </li> 
          <?php
          else: // if user is not logged in
            ?>
            <li class="nav-item">
              <a class="nav-link" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>">Login</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/signup.php">Signup</a>
            </li>
            <?php
          endif;
          ?>

        </ul>
      </div>

     
  
  </nav>



<body>