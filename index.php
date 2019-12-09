


<?php
require_once("header.php");
?>
<div class="index_page">


<!-- $_SESSION["name"] = "peter";  array that stores variables that pass from page to page
set name to peter, everywhere on the site the name will be peter -->





    <div class="row">
        <form action="/actions/login.php" method="post" class="col-md-12 logout">
            <?php
                if(isset($_SESSION["user_id"])) :
                    echo "<h2>Welcome Back</h2>";
                    ?>
                    <form action="actions/login.php" method="post">
                        <button type="submit" name="action" value="logout" class="btn btn-warning">Logout</button>
                    </form>

                    <?php
                else :
            ?>
           
            <?php
            include($_SERVER["DOCUMENT_ROOT"] . "/includes/error_check.php");
            ?>
            <div class="container login">
                <div class="login_form">
                <h2>Login</h2>
                <p>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email Address" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" class="form-control">
                </div>
                </p>
               <!-- <div class="form-group row">
                    <div class="col-md-6">
                    <p id="forgot">
                        <a>Forgot Password?</a>
                    </p>
                    </div>
                    <div class="col-md-6">
                    <p id="button">
                        <button class="btn btn-primary" type="submit" name="action" value="login">Login</button>
                    </p>
                    </div>
                    
                    <p>
                        <a href="signup.php">Create Account</a>
                    </p> 
                </div> -->
                <div class="form-group">
                   
                        <p id="button">
                            <button class="btn btn-warning" type="submit" name="action" value="login">Login</button>
                        </p>
                  
                 
                        <p id="forgot">
                            <a>Forgot Password?</a>
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


