<?php
// is user logged in and do they have rights - if not do the header location thing to send them back to log in page
// mjust start session since this is above the header
session_start();
if( !isset($_SESSION["user_id"]) ) {
    header("Location: http://".$_SERVER.["SERVER_NAME"]);
}

require_once("header.php");
?>


<div class="container" id="addpost">
    <div class="row">
        <div class="col-12"><h1>Add Project</h1></div>
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/includes/error_check.php"); // php doesn't understand / set to doc root to find the file ?>
            <form method="post" action="/actions/create_post_action.php" enctype="multipart/form-data" class="col-12">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" placeholder="Article Title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" class="form-control" rows="10"></textarea>
                </div>
                <div class="form-group" id="addfile">
                    <label for="featured_image">Featured Image</label>
                    <input type="file" name="featured_image" id="featured_image" class="form-control">
                </div>
                <button class="btn btn-primary" name="action" value="publish">Publish</button>
            </form>
    </div>
</div>














        <?php
require_once("footer.php");
?>