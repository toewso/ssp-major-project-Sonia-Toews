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
  
 
  <div class="drop">
<ul>
  <a class="nb" href="index.php">
    <img src="/assests/logo2.png" class="w-50">
  </a>
  <li class="dropdown">
    <a href="#" class="dropbtn ll" id="bdrop">My Account</a>
    <div class="dropdown-content">
        <a href="#">
          <i class="fa fa-heart-o fa-lg"></i>                       
          <span class="nav-text">My Favs</span>
        </a>
        <a href="profile.php">
          <i class="fa fa-fw fa-user fa-lg"></i>
          <span class="nav-text">My Profile</span>
        </a>
        <a href="articles.php">
          <i class="fa fa-fw fa-newspaper fa-lg"></i>
          <span class="nav-text">My Projects</span>
        </a>
        <a href="add_post.php">
          <i class="fas fa-image fa-lg"></i>
          <span class="nav-text">Add Project</span>
        </a>
        <div class="dropdown-divider"></div>
        <a class="log" href="/actions/login.php?action=logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-text">Logout</span>
        </a>
    </div>
  </li>
    <li class="ll"><a href="http://<?php echo $_SERVER['SERVER_NAME'];?>">Home</a></li>
    <li class="ll"><a href="/members.php">Discover</a></li>
    <li class="top">
                 <div class="search-container">
                <form action="/action_page.php" autocomplete="on">
                <input type="text" placeholder="Search..." name="search" id="search">
                <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
</li>

</ul>

</div>





<body>




.drop {
   
   box-shadow: 0 2px 2px -2px rgba(0,0,0,.2);

.nb {
   display: inline-block;
   margin-top: 15px !important;
}

ul {
   list-style-type: none;
   margin: 0;
   padding-bottom: 20px;
}

li {
   float: right;
   list-style-type: none;
   font-size: 16px;
}

.ll {
   font-size: 18px;
   font-weight: 500;
}

a {
   text-decoration: none;
   color: $success;
}

a:hover {
   color: #3E9688;
}

li a, .dropbtn {
   display: inline-block;
   color: $success;
   text-align: center;
   padding-right: 13px;
   padding-left: 13px;
   text-decoration: none;
   margin-top: 15px;
}

.dropbtn:hover {
   color: #3E9688 !important;
}

/*.dropdown:hover {
   background-color: $success;
}*/

li.dropdown {
   display: inline-block;
   min-width: 130px;
}

.dropbtn {
   min-width: 130px;
   padding-right: 40px;
   }
 
.dropdown-content {
display: none;

background-color: rgba(255, 255, 255, 0.94);
min-width: 130px;
z-index: 1;
transition: all .4s ease-in-out;

   a {
   color: $secondary;
   padding: 5px 15px;
   text-decoration: none;
   display: block;
   text-align: left;
   }

   li a i, .dropbtn .nav-text {
   display: inline-block;
   text-align: center;
   padding: 14px 16px;
   text-decoration: none;
   }

   .log {
       padding: 10px 15px;
   }
       
   .fa-lg {
   font-size: 1.2em;
   padding-right: 5px;
   line-height: .75em;
   vertical-align: -.0667em;
   }      
}
 
.dropdown-content a:hover {
background-color: rgba(227, 227, 227, 0.3);
}
 
.dropdown:hover .dropdown-content {
   display: block;
}

.top input::placeholder { color: $success;}

.top input:focus::placeholder {
   color: transparent;
 }
 
.search-container {
   background-color: transparent;
   display: inline-block;
   position: relative;
   height: 60px;
   padding: 0;
 
   input[type="text"] {
   color: $success;
   padding: 3px;
   padding-right: 60px;
   margin-top: 8px;
   position: absolute;
   top: 0;
   right: 0;
   //display: inline-block;
   font-size: 16px;
   background-color: transparent;
   background: none;
   border: none;
   outline: none;
   color: #555;
   width: 0px;
   //z-index: 3;
   transition: width .4s cubic-bezier(0.000, 0.795, 0.000, 1.000);
   cursor: pointer;
 }

 input[type="text"]:focus:hover {
   border-bottom: 1px solid $success;
   padding-right: 30px;
 }
 
 input[type="text"]:focus {
   width: 300px;
   z-index: 1;
   border-bottom: 1px solid $success;
   cursor: text;
 }

 button {
   color: $success;
   padding: 6px 10px;
   margin-top: 8px;
   //margin-right: 16px;
   background: transparent;
   font-size: 16px;
   border: none;
   cursor: pointer;

   .fa-search {
       padding: 7px;
   }

 }
  button:hover {
   color: #3E9688;
 }

}

@media screen and (max-width: 600px) {
.top .search-container {
   float: none;
}
.top a, .topnav input[type=text], .top .search-container button {
   float: none;
   display: block;
   text-align: left;
   width: 100%;
   margin: 0;
   padding: 14px;
}
.top input[type=text] {
   border: none;  
   background-color: transparent;
}
 }
}

