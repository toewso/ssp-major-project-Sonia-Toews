<?php
require_once("header.php");
?>


<div class="container members">
    <div class="row">
        <div class="col-12">
            <h1><?php
            if( isset($_GET["search"])) {
                echo "Search Results for: " . $_GET["search"];
            } else {
                echo "<h2>";
                echo "DISCOVER DESIGNERS";
                echo "</h2>";
            }
            ?></h1>
        </div>
    </div>
        <hr>
        
                <div class="col-md-12">
                    <div class="card bg-dark text-white">
                        <img src="/assests/logo1.png" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>
             
        <?php // these are the only fields i want returned in my array, not the whole profile uses too much memory
        $users_query = " SELECT users.id, users.first_name, users.last_name, images.url AS profile_pic 
                         FROM users
                         LEFT JOIN images
                         ON users.profile_pic_id = images.id"; // on the premise that the prof pic id is the same as the images id
       
       $search = (isset($_GET["search"])) ? $_GET["search"]  : false;
            
       // select members based on search query. only show if its anything LIKE what was typed
            if($search){
                //take a string a figure out which character to use to seperate array sonia+toews both words are their own piece of an array turn string into array
                $search_words = explode(" ", $search);
               
                for($i = 0; $i< count($search_words); $i++) {
                    $users_query .= ($i > 0) ? " OR ": " WHERE "; // dont use OR the first time after every subsequent time
                    $users_query .= "users.first_name LIKE '%".$search_words[$i]."%'";
                    $users_query .= "OR users.last_name LIKE '%".$search_words[$i]."%'";
                }
                
            } 
           

        if($users_result = mysqli_query($conn, $users_query)) {
            while($user_row = mysqli_fetch_array($users_result)) {
               
                ?>
             



<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="..." class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>





                <div class="card-group">
                    <div class="col-md-4">
                        <div class="card">
                           <img src="<?= $user_row["profile_pic"];?>" class="card-img-top">
                            <div class="card-header">
                                <h5>
                                <a href="/profile.php?user_id=<?=$user_row["id"];?>">
                                <?=$user_row["first_name"]. " " .$user_row["last_name"]?> 
                                </a>
                            </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <?php

            }
        } else {
            echo mysqli_error($conn);
        }
        ?>




    
</div>


















<?php
require_once("footer.php");
?>