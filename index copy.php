
<?php
require_once("header.php");
?>

<div class="index_page">


<div class="container log">
    <div class="row">
        <form action="/actions/login.php" method="post" class="col">
            <?php
                if(isset($_SESSION["user_id"])) :
                    ?>
                    <div class="container follow"><h1>Artists You Follow</h1>
                    <div class="row">
                        <div class="col-md-12">
                        </div class>


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
            <?php
             endif;
            ?>
        </form>
    </div>
</div>
 
<?php
require_once("footer.php");
?>
 </div>

