

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
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/styles.css">

    <title>Design Hut</title>
  </head>



  <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <a class="navbar-brand" href="index.php">
          <img src="/assests/logo1.png" class="w-50 py-0 my-0">
      </a>
      
      

      <!--SEARCH-->
 
     <!-- <form action="/members.php" class="my-lg-0 input-group col-md-3 " id="search_container">
        <input name="search" class="form-control" id="search" type="search" placeholder="Search" aria-label="Search" value="<?php //echo (isset($_GET["search"])) ? $_GET["search"] : ""; ?>">
        <button type="submit" id="submit"><i class="fa fa-search"></i></button>
      </form> 
-->


<div class="topnav">
  <div class="search-container">
    <form action="/articles.php" id="search_container">
      <input class="form-control" type="search" placeholder="Search.." name="search" aria-label="Search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

     

      <!--COLLAPSE-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!--DROPDOWN-->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>">Home</a>
          </li>
          <?php
          if(isset($_SESSION["user_id"])) : //check if uses is logged in
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
                <img src="/assests/profile.svg" id="profile" class="py-1 icon w-50">
                Profile
             </a>
              <a class="dropdown-item" href="add_post.php">
                <img src="/assests/upload.svg" id="profile" class="py-1 icon w-50">  
                Add Project</a>
              <a class="dropdown-item" href="articles.php">
                <img src="/assests/articles.svg" id="profile" class="py-1 icon w-50">
                My Projects</a>
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
            <li class="/nav-item">
            <a class="nav-link" href="/signup.php">Signup</a>
            </li>

            <?php
          endif;
          ?>

        </ul>
      </div>
        
     
  
  </nav>


<body>
<div class="index_page">


