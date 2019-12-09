<?php
// is user logged in and do they have rights - if not do the header location thing to send them back to log in page
// mjust start session since this is above the header
session_start();
if( !isset($_SESSION["user_id"]) ) {
    header("Location: http://".$_SERVER.["SERVER_NAME"]);
}

require_once("header.php");

   if(isset($_GET["article_id"]) ) {   // if article id is set
    $article_id = $_GET["article_id"];
 

    $article_query = "SELECT  * FROM articles WHERE id = $article_id"; //if I don't find this article don't ouput anything
    if($results = mysqli_query($conn, $article_query)) { // returing results and storing in a var to use for while statement
        while($article_row = mysqli_fetch_array($results)) {
            print_r($article_row);

?>




<div class="container">
    <div class="row">
        <div class="col-12"><h2>Edit Post</h2></div>
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/includes/error_check.php"); // php doesn't understand / set to doc root to find the file ?>
            <form method="post" action="/actions/update_post_action.php" enctype="multipart/form-data" class="col-12">
                <input type="hidden" name="article_id" value="<?=$article_row["id"];?>">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" value="<?=$article_row["title"];?>" id="title" placeholder="Article Title" class="form-control"> 
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" class="form-control" rows="10"><?=$article_row["content"];?></textarea>
                </div>
                <div class="form-group">
                    <label for="featured_image">Featured Image</label>
                    <input type="file" name="featured_image" id="featured_image" class="form-control">
                </div>
                <button class="btn btn-text text-danger" name="action" value="delete">Delete</button>
                <button class="btn btn-primary" name="action" value="update">Update</button>
            </form>
    </div>
</div>














<?php
            }
         }
     }
require_once("footer.php");
?>