<?php
require_once("header.php");

//select users from database
// get user ID so looking at someone elses profile the name would be website/soniatoews, use SESSIONS to get your own id if you are looking at your own page

$user_id = ( isset($_GET["user_id"]) ) ? $_GET["user_id"] : $_SESSION["user_id"];

$user_query = "SELECT users.* , images.url AS profile_pic
               FROM users
               LEFT JOIN images
               ON users.profile_pic_id = images.id
               WHERE users.id = " . $user_id;

if ($user_request = mysqli_query($conn, $user_query) ) : //this only brings back true or false
    while ($user_row = mysqli_fetch_array($user_request)) : // this put reslults in a nice array fname, lname etc
        //print_r($user_row);
?>
<div class="container editprofile">
    <div class="row">
        <div class="col-12">
            <h1>Editing <?php echo $user_row["first_name"] . " " . $user_row["last_name"]; ?></h1>
            <?php
            include_once($_SERVER["DOCUMENT_ROOT"] . "/includes/error_check.php");
            ?>
            
            <form action="/actions/edit_user.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="user_id" value="<?php echo $user_row["id"]?>">
                <div class="form-row mb-2 uploadimage">
                            <div class="col">
                                <div class="form-group" id="addfile">
                                    <label for="profile_pic" class="btn btn-outline-success">Upload Profile Image
                                    <input type="file" hidden name="profile_pic" id="profile_pic" class="form-control">
                                    </label>
                                </div>
                            </div>
                        </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="text" tabindex="1" name="first_name" placeholder="First Name" class="form-control" value="<?php echo $user_row['first_name'];?>">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" tabindex="2" name="last_name" placeholder="Last Name" class="form-control" value="<?php echo $user_row['last_name'];?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <input type="text" tabindex="3" name="email" placeholder="Email" class="form-control" value="<?php echo $user_row['email'];?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <input type="text" tabindex="3" name="address" placeholder="Address" class="form-control" value="<?php echo $user_row['address'];?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <input type="text" tabindex="4" name="address2" placeholder="Address" class="form-control" value="<?php echo $user_row['address2'];?>">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="text" tabindex="5" name="city" placeholder="City" class="form-control" value="<?php echo $user_row['city'];?>">
                    </div>
                
                    <div class="col-md-2">
                        <select name="province_id" class="form-control">
                            <?php
                            $province_query = "SELECT * FROM provinces";
                            if($province_results = mysqli_query($conn, $province_query)):
                                echo "<option disabled ";
                                if(!$user_row["province_id"]) echo "selected";
                                echo ">Province</option>";
                                while($province = mysqli_fetch_array($province_results)):
                            ?>

                            <option value="<?=$province["id"];?>" <?php
                                if($province["id"] == $user_row["province_id"]) echo "selected";
                            
                            ?>><?=$province["name"];?></option>
                            <?php
                                endwhile;
                            else:
                               echo mysqli_error($conn);
                            endif;
                            ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <input type="text" tabindex="6" name="postal_code" placeholder="Postal Code" class="form-control" value="<?php echo $user_row['postal_code'];?>">
                    </div>
                </div>
                 
                <div class="form-row">
                <?php
                if($_SESSION["user_id"] == $user_id || $SESSION["role"] == 1) : // if user session is me (true) then you can edit profile 
                    ?>
                    <div class="col">
                        <a href="/reset_password.php">Change Password</a>
                    </div>
                    <div class=" col text-right">
                        <button type="submit" name="action" value="delete" class="btn btn-text text-danger">Delete Account</button>
                        <button type="submit" tabindex="3" name="action" value="update" class="btn btn-secondary">Update Account</button>
                    </div>
                    <?php
                endif;
                ?>
                 </div>
            </form>
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