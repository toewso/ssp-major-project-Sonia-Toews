<?php
require_once("header.php");

//select users from database
// get user ID so looking at someone elses profile the name would be website/soniatoews, use SESSIONS to get your own id if you are looking at your own page

$user_id = ( isset($_GET["user_id"]) ) ? $_GET["user_id"] : $_SESSION["user_id"];

$user_query = "SELECT users.*, provinces.name AS province_name, images.url AS profile_pic 
                FROM users
                LEFT JOIN provinces 
                ON users.province_id = provinces.id
                LEFT JOIN images 
                ON users.profile_pic_id = images.id
                WHERE users.id = " . $user_id;

if ($user_request = mysqli_query($conn, $user_query) ) : //this only brings back true or false
    while ($user_row = mysqli_fetch_array($user_request)) : // this put reslults in a nice array fname, lname etc
        //print_r($user_row);
?>
<div class="container">
    <div class="row">
        <div class="col-2" id="profilepic">
            <img src="<?php echo $user_row["profile_pic"]; ?>">
        </div>
     
        <div class="col-2 profileinfo">
            <?php
            include_once($_SERVER["DOCUMENT_ROOT"] . "/includes/error_check.php");
            ?>
            <h5><?php echo $user_row["first_name"] . " " . $user_row["last_name"]; ?></h5>
            <p id="email">
            <?=$user_row["email"]?>
            </p>
            <hr>

            <p id="userinfo">
               <?=$user_row["address"]?><br>  <!-- echo a single line, get rid of php echo -->
               <?=($user_row["address2"] != "") ? $user_row["address2"]. '<br>':''?> <!-- if a2 is not empty then but br tag in -->
               <?=$user_row["city"] . " , " . $user_row["province_name"];?><br>  
               <?=$user_row["postal_code"]?><br>   
            </p>
            
            <hr>
            <?php
            if($_SESSION["user_id"] == $user_id || $SESSION["role"] == 1) : // if user session is me (true) then you can edit profile 
                ?>
                <div class="btn-group">
                    <a href="/edit_profile.php?user_id=<?=$user_row["id"]; ?>" class="btn btn-outline-primary">Edit Profile</a>
                </div>
                <?php
            endif;
            ?>
        </div>
        <div class="gallery col-md-9">
        <div class="row">
            <div class="col-md-6">
                <img src="/assests/art/work13.png">
            </div>
            <div class="col-md-4">
                <img src="/assests/art/work12.jpg">
            </div>
            <div class="col-md-4">
                <img src="/assests/art/work11.jpg">
            </div>
        </div>
        
        </div>


    </div>






   
</div>

















<?php
endwhile;
else :
    echo mysqli_error($conn);
endif;
require_once("footer.php");
?>