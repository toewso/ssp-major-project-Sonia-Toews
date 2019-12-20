<?php
require_once("header.php");
?>


    <div class="container articles">
        <div class="row">
            <div class="col-md-12 search-container" id="search-articles">
                <form action="/articles.php" class="my-lg-0 input-group col-md-3" id="search_container">
                    <input name="search" class="form-control" id="search" type="search" placeholder="Search" aria-label="Search" value="<?php echo (isset($_GET["search"])) ? $_GET["search"] : ""; ?>">
                        <button type="submit" id="submit"><i class="fa fa-search"></i></button>
                        </form>
            </div>
    
            <?php
            if(isset($_GET["id"])) {

                 /*-----------------------
                *
                *   SINGLE ARTICLE
                *
                ------------------------*/

            $article_query = "SELECT articles.* , users.first_name, users.last_name, 
                                                  images.url AS featured_image
                             FROM articles 
                             LEFT JOIN users
                             ON articles.author_id = users.id
                             LEFT JOIN images
                             ON articles.image_id = images.id 
                             WHERE articles.id = " . $_GET["id"];
                             // take the articles img id and match it with the images table id

            if($article_result = mysqli_query($conn, $article_query)) {
                while($article_row = mysqli_fetch_array($article_result)) {
                    //print_r($article_row);
                ?>
                <div class="container edit_article">
                    <div class="row articlerow">
                        <div class="form articleform col-md-8">
                            <h2><?=$article_row["title"]?></h2>
                                <figure class="col-md-12">
                                    <img src="<?=$article_row["featured_image"]?>" class="w-100 featured_image">
                                </figure>
                                    <p class="text-muted"> Published on <?=date("M jS, Y @ hA", strtotime($article_row["date_created"]))?> by <?=$article_row["first_name"]." ".$article_row["last_name"]?></p> 
                                <div class="col-md-12 titleedit">
                                    <p><?=$article_row["content"]?></p>
                                </div>
                    
                <?php
                // if logged in and the post is yours or you are super admin show edit menu
                        if(isset($_SESSION["user_id"]) && $_SESSION["user_id"] == $article_row["author_id"] ) {  // if logged in and the post is yours. compare the user_id to author of post
                            echo "<div class='col-md-12 titleedit'>";
                            echo "<button class='btn btn-outline-secondary'><a id='one' href='edit_post.php?article_id=".$article_row["id"]."'>Edit Project</a></button><a id='two' href='articles.php'>Back</a>"; 
                            echo "</div></div></div></div>";
                        }

                } //end of while
            } else {
                echo mysqli_error($conn);
                }
            
        } //if id isset 
        else { 
            // ELSE if no ID set, show ALL articles
            //if query include search
            $search_query = (isset($_GET["search"])) ? $_GET["search"] : false;
        
           // SEARCH OUTPUT
            if($search_query) {
                // if search query has any value echo
                echo "<div class='col-md-12'><h2 class='search_h2'>Search Results for: $search_query</h2></div>";
            } else {
                echo  "<div class='col-md-12'><h1>Design Projects</h1></div>";
            }


            // OUTPUT ALL ARTICLES //

            $articles_query = "SELECT articles.title, images.url AS featured_image, 
                                      articles.author_id, users.first_name, users.last_name, articles.date_created, articles.id
                               FROM articles
                               LEFT JOIN images
                               ON articles.image_id = images.id
                               LEFT JOIN users
                               ON articles.author_id = users.id";
             $art_where_query = "";
                if($search_query)  {    //SEARCH       
                $art_where_query =  " WHERE articles.title LIKE '%$search_query%'
                                    OR articles.content LIKE '%$search_query%'";
                $articles_query .= $art_where_query;
                                }
            // PAGINATION  AND ORDER       
             $current_page = (isset($_GET["page"])) ? $_GET["page"] : 1;
             $limit = 5;
             $offset = $limit * ($current_page - 1);                   

             $articles_query .=  " ORDER BY articles.date_modified DESC
                                    LIMIT $limit OFFSET $offset";

            if($article_result = mysqli_query($conn, $articles_query)) {
                
                // GET THE TOTAL COUNT OF ARTICLES
                $pagi_query = "SELECT COUNT(*) AS total FROM articles";
                if ($search_query) {
                    $pagi_query .= $art_where_query;
                }
                $pagi_result = mysqli_query($conn, $pagi_query);
                $pagi_row = mysqli_fetch_array($pagi_result);
                $total_articles = $pagi_row["total"];

                $page_count = ceil($total_articles / $limit);
                //. florr - round down
                // ceill = round up
                // round = round down if below 5, round up if aboce 5

                echo "<div class='col-md-12' aria-label='Page navigation'><ul class='justify-content-left pagination'>";

                $get_search = ($search_query) ? "?search=" . $search_query : "";
                if($current_page > 1) { // if you are on pg1 you don't see the prev button
                    echo "<li class='page-item'><a class='page-link' href='/articles.php?page=".( $current_page - 1 )."$get_search'>Previous</a></li>";
                }

                for ($i = 1; $i <= $page_count; $i++) {
                    echo " <li class='page-item";
                    if($current_page == $i) echo " active";
                    echo "'><a class='page-link' href='/articles.php?page=$i".$get_search."'>$i</a></li>";
                }
                
                if ($current_page < $page_count) {
                    echo "<li class='page-item'><a class='page-link' href='/articles.php?page=".( $current_page + 1 )."$get_search'>Next</a></li>";

                }
                    echo "</ul></div>";
                    echo "<div class='card-deck'>";

                while($article_row = mysqli_fetch_array($article_result)) {
                    //print_r($article_row);
                    ?>
                    <div class="card" style="max-width: 18rem;">
                        <img class="image" src="<?=$article_row["featured_image"]?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="/articles.php?id=<?=$article_row["id"]?>"><?=$article_row["title"]?></a>
                            </h5>
                            <small class="text-muted"><?="by " .$article_row["first_name"]." ".$article_row["last_name"]?> </small>
                            <p>
                                <a class="readmore" href="/articles.php?id=<?=$article_row["id"]?>">Read More</a>
                            </p>
                        </div>
                    </div>
                    <?php
                } // end of while
                    echo "</div>";
            } else {
                echo mysqli_error($conn);
            }
        } //end of else show all articles
                ?>
                            </div>
                        </div>

<?php
require_once("footer.php");
?>