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

if ($user_request = mysqli_query($conn, $user_query) ) : 
    while ($user_row = mysqli_fetch_array($user_request)) : 
        //print_r($user_row);
?>
  <div class="container profile">
    <div class="card-deck col-md-12">
        <div class="col-md-4">
       
            <div class="card profile_card" style="max-width: 18rem;">
                <img src="<?php echo $user_row["profile_pic"];?>" class="card-img-top">
                    <div class="card-body">
                    
                    <?php
                    include_once($_SERVER["DOCUMENT_ROOT"] . "/includes/error_check.php"); //can this be anywhere
                    ?>
            
                    <h3><?php echo $user_row["first_name"] . " " . $user_row["last_name"]; ?></h3>
                        <ul class="list-group list-group-flush">
                            <h5><?=$user_row["email"];?></h5>
                        </ul>
                            <p class="bio" id="userinfo">
                            <?=($user_row["address"])?$user_row["address"]."<br>":"";?>
                            <?=($user_row["address2"] != "") ? $user_row["address2"].'<br>':'';?>
                            <?=($user_row["city"])?$user_row["city"] . ", ":"";?>
                            <?=($user_row["province_name"])?$user_row["province_name"]."<br>":"";?>
                            <?=$user_row["postal_code"];?>
                            </p>
                
                    <?php
                    if($_SESSION["user_id"] == $user_id || $_SESSION["role"] == 1) : // if user session is me (true) then you can edit profile 
                        ?>
                        <div class="btn-group">
                            <a href="/edit_profile.php?user_id=<?= $user_row["id"]; ?>">Edit Profile</a>
                        </div>
                    <?php
                endif;
                ?>
                </div>
            </div>
        </div>
  <?php

  $articles_query = "SELECT articles.title, images.url AS featured_image, 
                                      articles.author_id, users.first_name, users.last_name, articles.date_created, articles.id
                               FROM articles
                               LEFT JOIN images
                               ON articles.image_id = images.id
                               LEFT JOIN users
                               ON articles.author_id = users.id
                               WHERE articles.author_id = $user_id";
              
                        
            
                if($article_result = mysqli_query($conn, $articles_query)){
                    //echo "<div class='card-deck'>";
                while($article_row = mysqli_fetch_array($article_result)) {
                    //print_r($article_row);
                    ?>

                <div class="col-auto mb-5">
                    <div class="card project_card" style="max-width: 18rem;">
                     <img src="<?=$article_row["featured_image"]?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="/articles.php?id=<?=$article_row["id"]?>"><?=$article_row["title"]?></a>
                            </h5>
                            <small class="text-muted text_colored"><?="by " .$article_row["first_name"]." ".$article_row["last_name"]?> </small>
                            <p>
                                <a class="readmore" href="/articles.php?id=<?=$article_row["id"]?>">Read More</a>
                            </p>
                        </div>
                    </div>
                </div>
                
                <?php
                } // end of while
                //echo "</div>";
              }
    endwhile; //end while user_row
    ?>
        </div>
    </div>
    <?php
else :
    echo mysqli_error($conn);
endif;
    require_once("footer.php");
?>



