
<?php
require_once("header.php");
?>

<div class="index_page">


<!-- $_SESSION["name"] = "peter";  array that stores variables that pass from page to page
set name to peter, everywhere on the site the name will be peter -->


    <div class="container log">
    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/includes/error_check.php");
    ?>
        <div class="row">
        
            <!--WELCOME BACK-->
            <div class="welcome">
                <div class="welcome_form">
                <?php
                    if(isset($_SESSION["user_id"])) :
                        ?>
                        <div class="container follow">
                        <h1>Artists You Follow</h1>
                        </div>
                        <?php
                         
                        ?>
                        <!--<form action="actions/login.php" method="post">
                            <p id="button"><button type="submit" name="action" value="logout" class="btn btn-warning" id="logout">Logout</button></p>
                        </form> -->
                        <div id ="popup" class ="hidden">
                            <span class="close">&times;</span>
                            <h2>Welcome Back</h2>
                        </div>

                        <?php
                    else :
                        ?>
                </div>
            </div>
            
            <form action="/actions/login.php" method="post" class="col-md-12">
                <div class="login_form">
                    <h1>Login</h1>
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
                            <a href="#">Forgot Password?</a>
                        </p>
                    </div>
                </div>
                <?php
                endif;
                ?>
            </form>
        </div>
    </div>
  
    </div>
<?php
require_once("footer.php");
?>



/******************      LOG IN   ******************************************************************************

LOG IN

*****************************************************************************************************************/

.index_page {
    background-image: url(/Assests/background9.png);
    background-repeat: no-repeat;
    background-size: cover;
}

.log {
display: block;
text-align: center;

    form {
        background-color:  rgba(76, 168, 173, 0.9);;
        padding: 50px;
        border-radius: 10px;
    }

    .row {
        display: inline-block;
        text-align: left;
        }

    h1 {
        color: white;
        padding-bottom: 20px;
        text-align: center;
        font-weight: 600;
        }

        .login_form {
            
            input {
                width: 300px;  
            }

            #button {
                text-align: center;
            }

            button {
                padding: 0.375rem 50px;
                color: #4999AE; 
            }

            #forgot {
                padding-top: 5px;
                color: white;
                text-decoration: underline;

                a {
                    color: white;
                }
            }

            p {
                text-align: center;
            }
     }

    } 

/********   WELCOME  *******************************************/
     .follow h1 {
        position: relative;
        z-index: inherit;
        bottom: 170px;
        font-weight: 400;
        font-size: 30px;   
        padding: 300px;
    }

    .welcome {
        padding: 50px;

        h2 {
            color: white;
            text-align: center;
            padding-bottom: 10px;
            font-size: 24px;
            padding-right: 10px;
            padding-left: 10px;
            
        }

        .close {
            float: right;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1;
            /* color: #000; */
            text-shadow: none !important;
            opacity: .5;
            cursor: pointer;

        }

        /* #logout {
            color: #4999AE !important;
            text-align: center;
        }

        #button {
            text-align: center;
        } */

        #popup {
            display: inline-block;
            opacity: 0;
            position: fixed;
            top: 20%;
            left: 50%;
            padding: 1em;
            transform: translateX(-50%);
            background:#4999AE ;
            border-radius: 5px;
            /*box-shadow: 1px 1px .5em 0 rgba(0, 0, 0, .5);*/
            transition: opacity .3s ease-in-out;
        }
        
        #popup.hidden {
            display: none;
        }
        #popup.fade-in {
            opacity: 1;
        }
    }
 