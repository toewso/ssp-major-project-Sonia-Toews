
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
<nav>

  <ul id="logo">
    <a class="nb" href="index.php">
      <img src="/assests/logotransparent1.png" class="w-50">
    </a>
</ul>
</nav>
<nav class="main-menu">


  
 
<div class="settings"></div>

      
<ul>
  
<li>                                   
<a href="http://<?php echo $_SERVER['SERVER_NAME'];?>">
<i class="fa fa-home fa-lg"></i>
<span class="nav-text">Home</span>
</a>
</li>   
   
<li>                                 
<a href="/members.php">
<i class="fa fa-user fa-lg"></i>
<span class="nav-text">Discover</span>
</a>
</li>   

    
<li>                                 
<a href="#">
<i class="fa fa-envelope-o fa-lg"></i>
<span class="nav-text">My Account</span>
</a>
</li>   
  


 
<li>
<a href="#">
<i class="fa fa-heart-o fa-lg"></i>                       
<span class="nav-text">My Favs</span>
</a>
</li>

<li>
<a href="articles.php">
<i class="fa fa-clock-o fa-lg"></i>
<span class="nav-text">My Projects</span>
</a>
</li>
  
<li>
<a href="add_post.php">
<i class="fa fa-desktop fa-lg"></i>
<span class="nav-text">Add Post</span>
</a>
</li>
  


<li>
<a href="/actions/login.php?action=logout">
<i class="fa fa-flask fa-lg"></i>
<span class="nav-text">Logout</span>
</a>
</li>
  

</ul>
</nav>

<body>

  






