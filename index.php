<?php
require_once("header.php");
?>
<div class="index_page">
    <div class="container log">
<?php
    if(isset($_SESSION["user_id"])) :
    $user_query = "SELECT * FROM users WHERE id = " . $_SESSION["user_id"];
            if($user_request = mysqli_query($conn, $user_query)) :
                while($user_row = mysqli_fetch_array($user_request)) {
                    echo "<h2 id='welcome'>Welcome Back ".$user_row["first_name"]." ".$user_row["last_name"]."</h2> ";
                    ?>
                 
                    <form action="/actions/login.php" method="post">
                        <button type="submit" name="action" value="logout" class="btn btn-success">Logout</button>
                    </form>
                    <?php
                }
            endif;
        else :
        ?>



        <form action="/actions/login.php" method="post" class="col">
            
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
                        <a class="col-md-1" id="account" href="signup.php">Create Account</a>
                        </p>
                    </div>
                </div>
            </div>
            </form>
            <?php
             endif;
            ?>
       
    </div>
</div>
 </script>
<?php
require_once("footer.php");
?>

          
