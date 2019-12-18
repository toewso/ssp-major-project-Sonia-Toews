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
<div class="container profile">
    <div class="row first">
     <div class="card-columns col-md-1">
        <div class="card pro">
            <img src="<?php echo $user_row["profile_pic"]; ?>">
            <div class="card-body">
              
            <?php
            include_once($_SERVER["DOCUMENT_ROOT"] . "/includes/error_check.php"); //can this be anywhere
            ?>
            
            <h3><?php echo $user_row["first_name"] . " " . $user_row["last_name"]; ?></h3>
            
            <ul class="list-group list-group-flush">
            <h5><?=$user_row["email"]?></h5>
            </ul>
            <p class="bio" id="userinfo">
               <?=$user_row["address"]?><br>  <!-- echo a single line, get rid of php echo -->
               <?=($user_row["address2"] != "") ? $user_row["address2"]. '<br>':''?> <!-- if a2 is not empty then but br tag in -->
               <?=$user_row["city"] . " , " . $user_row["province_name"];?><br>  
               <?=$user_row["postal_code"]?><br>   
            </p>
         
            <?php
            if($_SESSION["user_id"] == $user_id || $SESSION["role"] == 1) : // if user session is me (true) then you can edit profile 
                ?>
                <div class="btn-group">
                    <a href="/edit_profile.php?user_id=<?= $user_row["id"]; ?>" class="btn btn-outline-success">Edit Profile</a>
                </div>
                <?php
            endif;
            ?>
            </div>
          </div>
        </div>
     

        <div class="card-columns col-md-11">
                  <div class="card propics" style="width: 18rem;">
                    <img src="<?php echo $user_row["profile_pic"];?>">
                  <div class="card-body">
                    <h2>Title</h2>
                    <p>Description</p>
                  </div>
                  </div>
     

              
                  <div class="card propics" style="width: 18rem;">
                    <img src="<?php echo $user_row["profile_pic"]; ?>">
                  <div class="card-body">
                  <h2>Title</h2>
                  <p>Description</p>
                  </div>
                  </div>
           
                
                  <div class="card propics" style="width: 18rem;">
                    <img src="<?php echo $user_row["profile_pic"]; ?>">
                  <div class="card-body">
                  <h2>Title</h2>
                  <p>Description</p>
                  </div>
                  </div>

               
                  <div class="card propics" style="width: 18rem;">
                      <img src="<?php echo $user_row["profile_pic"]; ?>" class="image-card-top">
                    <div class="card-body">
                      <h2>Title</h2>
                      <p>Description</p>
                    </div>
                  </div>
                  <div class="card propics" style="width: 18rem;">
                      <img src="<?php echo $user_row["profile_pic"]; ?>" class="image-card-top">
                    <div class="card-body">
                      <h2>Title</h2>
                      <p>Description</p>
                    </div>
                  </div>
                  <div class="card propics" style="width: 18rem;">
                      <img src="<?php echo $user_row["profile_pic"]; ?>" class="image-card-top">
                    <div class="card-body">
                      <h2>Title</h2>
                      <p>Description</p>
                    </div>
                  </div>

          </div>
       

                
   
      


<?php
endwhile;
?>


</div> 
</div>
<?php
else :
    echo mysqli_error($conn);
endif;
require_once("footer.php");
?>



