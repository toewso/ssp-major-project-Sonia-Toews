<?php
require_once("header.php");
?>


    <div class="container members">
        <div class="col-12">
            <?php
            if( isset($_GET["search"])) {
                echo "<h5>Search Results for: " . $_GET["search"] . "</h5>";
            } else {
           
            }
            ?>
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
               
                for($i = 0; $i < count($search_words); $i++) {
                    $users_query .= ($i > 0) ? " OR ": " WHERE "; // dont use OR the first time after every subsequent time
                    $users_query .= "users.first_name LIKE '%".$search_words[$i]."%'";
                    $users_query .= "OR users.last_name LIKE '%".$search_words[$i]."%'";
                }  
            } 


            


            ?>

                <div class="container mem_cards">
                <div class="row">
                    
                    <div class="col-md-12">
                    <div class="card-columns">

                   <?php  if($users_result = mysqli_query($conn, $users_query)) {
                
                while($user_row = mysqli_fetch_array($users_result)) {
                    ?>
                  
                        
                            <div class="card" style="width: 18rem;">
                                <span id="heart-second" value="So" class="heart"><i class="fas fa-heart"></i></span>
                                <img src="<?= $user_row["profile_pic"];?>" class="card-img-top">
                                <div class="card-header">
                                    <h5 class="card-title">
                                        <center> <a href="/profile.php?user_id=<?=$user_row["id"];?>">
                                        <?=$user_row["first_name"]. " " .$user_row["last_name"]?> 
                                        </a></center>
                                    </h5>
                                </div>
                            </div>
                           
                   
                   
            <?php
            }
            ?>
                        </div>
                    </div>
                 </div>
             </div>
            <?php
        } else {
            echo mysqli_error($conn);
        }
        ?>
 
    </div>

<?php
require_once("footer.php");
?>