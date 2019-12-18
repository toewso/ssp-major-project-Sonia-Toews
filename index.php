<?php
require_once("header.php");
?>




<div class="container log">
    
        <form action="/actions/login.php" method="post" class="col">
            <?php
            if(isset($_SESSION["user_id"])) :
            ?>
                    <div class="container follow"><h1>Artists You Follow</h1>

                        <div class="row">
                                <div class="col-lg-4">
                                    <div class="card" style="width: 18rem;">
                                        <span class="heart"><i id="heart" class="fas fa-heart"></i></span>
                                        <img src="/Assests/art1.jpg" class="first-image">
                                        <div class="card-body">
                                            <a href="#"><center>by Kate McKinnon</center></a>
                                            <hr>
                                            <center>
                                            <h5 class="card-title">Coffee Tea Logo</h5>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card" style="width: 18rem;">
                                        <span id="heart-second" value="So" class="heart"><i class="fas fa-heart"></i></span>
                                        <img src="/Assests/art2.jpg" class="first-image">
                                        <div class="card-body">
                                            <a href="#"><center>by Leslie Jones</center></a>
                                            <hr>
                                            <center>
                                            <h5 class="card-title">Squirrel Logo</h5>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card" style="width: 18rem;">
                                        <span id="heart-third" class="heart"><i class="fas fa-heart"></i></span>
                                        <img src="/Assests/art3.jpg" class="first-image">
                                        <div class="card-body">
                                            <a href="#"><center>by Kenan Thompson</center></a>
                                            <hr>
                                            <center>
                                            <h5 class="card-title">Alathena Font Family</h5>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-lg-4">
                                    <div class="card" style="width: 18rem;">
                                        <span class="heart"><i id="heart" class="fas fa-heart"></i></span>
                                        <img src="/Assests/work7.jpg" class="first-image">
                                        <div class="card-body">
                                            <a href="#"><center>by Kate McKinnon</center></a>
                                            <hr>
                                            <center>
                                            <h5 class="card-title">Coffee Tea Logo</h5>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card" style="width: 18rem;">
                                        <span id="heart-second" value="So" class="heart"><i class="fas fa-heart"></i></span>
                                        <img src="/Assests/work8.jpg" class="first-image">
                                        <div class="card-body">
                                            <a href="#"><center>by Leslie Jones</center></a>
                                            <hr>
                                            <center>
                                            <h5 class="card-title">Squirrel Logo</h5>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card" style="width: 18rem;">
                                        <span id="heart-third" class="heart"><i class="fas fa-heart"></i></span>
                                        <img src="/Assests/work9.jpg" class="first-image">
                                        <div class="card-body">
                                            <a href="#"><center>by Kenan Thompson</center></a>
                                            <hr>
                                            <center>
                                            <h5 class="card-title">Alathena Font Family</h5>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-lg-4">
                                    <div class="card" style="width: 18rem;">
                                        <span class="heart"><i id="heart" class="fas fa-heart"></i></span>
                                        <img src="/Assests/work10.jpg" class="first-image">
                                        <div class="card-body">
                                            <a href="#"><center>by Kate McKinnon</center></a>
                                            <hr>
                                            <center>
                                            <h5 class="card-title">Coffee Tea Logo</h5>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card" style="width: 18rem;">
                                        <span id="heart-second" value="So" class="heart"><i class="fas fa-heart"></i></span>
                                        <img src="/Assests/work11.jpg" class="first-image">
                                        <div class="card-body">
                                            <a href="#"><center>by Leslie Jones</center></a>
                                            <hr>
                                            <center>
                                            <h5 class="card-title">Squirrel Logo</h5>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card" style="width: 18rem;">
                                        <span id="heart-third" class="heart"><i class="fas fa-heart"></i></span>
                                        <img src="/Assests/work12.jpg" class="first-image">
                                        <div class="card-body">
                                            <a href="#"><center>by Kenan Thompson</center></a>
                                            <hr>
                                            <center>
                                            <h5 class="card-title">Alathena Font Family</h5>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <?php
                    ?>
                    <!--<form action="actions/login.php" method="post">
                        <button type="submit" name="action" value="logout" class="btn btn-primary">Logout</button>
                    </form>-->

                    <?php
                else :
           
                    ?>
            <div class="index_page">
            <div class="row two">
                <div class="login_form">
                    <h2>Login</h2>
                <?php
                include($_SERVER["DOCUMENT_ROOT"] . "/includes/error_check.php");
                ?>
            
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email Address" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="form-group">
                        <p id="button">
                            <button class="btn btn-warning" type="submit" name="action" value="login">Login</button>
                        </p>
                        </div>
                        <div class="form-group">
                        <p id="links">
                                <a class="col-md-1" id="forgot" href="#">Forgot Password?</a>
                            <!-- <a class="col-md-1" id="account" href="signup.php">Create Account</a>-->
                            </p>
                    
                        </div>
                </div>
            </div>
            <?php
             endif;
            ?>
        </form>
    </div>
</div>
 
<?php
require_once("footer.php");
?>


