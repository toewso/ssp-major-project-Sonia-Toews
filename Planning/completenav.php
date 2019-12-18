
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

  







/***********************************************************************
NAV BAR
************************************************************************/


.settings {
    height:73px; 
    float:left;
    background-repeat:no-repeat;
    width:250px;
    margin:0px;
     text-align: center;
    font-size:20px;
  }

.fa-lg {
font-size: 1em;
  
}
.fa {


width: 55px;
height: 36px;
text-align: center;
top:12px; 
font-size:20px;
}

.main-menu:hover, nav.main-menu.expanded {
width:250px;
overflow:hidden;
opacity:1;

}

.main-menu {
background:#F7F7F7;
position:absolute;
top:0;
bottom:0;
height:100%;
right: 0;
width:55px;
overflow:hidden;
transition:width .2s linear;
transition:width .2s linear;
transform:translateZ(0) scale(1,1);
box-shadow: 1px 0 15px rgba(0, 0, 0, 0.07);
  opacity:1;

  
}

.main-menu ul {
margin:7px 0;

}

.main-menu li {
position:relative;
display:block;
width:250px;
}

.main-menu li {
position:relative;
width:255px;
display:table;
border-collapse:collapse;
border-spacing:0;
color:#8a8a8a;
font-size: 13px;
text-decoration:none;
transform:translateZ(0) scale(1,1);
transition:all .14s linear;
transition:all .14s linear;
font-family: 'Strait', sans-serif;
border-top:1px solid #f2f2f2;

text-shadow: 1px 1px 1px  #fff;  
}
.main-menu .nav-icon {
    position:relative;
    display:table-cell;
    width:55px;
    height:36px;
    text-align:center;
    vertical-align:middle;
    font-size:18px;

}

.main-menu .nav-text  {
font-size: 16px;
vertical-align:middle;
width:190px;

}

a:hover,a:focus {
text-decoration:none;
border-left:0px solid #F7F7F7;
}
nav ul, nav li {
position: relative;
outline:0;
margin:0;
padding:0;
text-transform: uppercase;
}


.main-menu li:hover>a,nav.main-menu li.active>a,.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus,.no-touch .dashboard-page nav.dashboard-menu ul li:hover a,.dashboard-page nav.dashboard-menu ul li.active a {
color:#fff;
color:#00bbbb;
text-shadow: 0px 0px 0px; 
}
.area {
float: left;
background: #e2e2e2;
width: 100%;
height: 100%;
}
    




 

.nb {
    display: inline-block;
}

#logo {
    list-style-type: none;
    margin: 0;
    padding: 15px 9px;
    overflow: hidden;
    background-color: rgba(0, 0, 0, 0.0);
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
  }
