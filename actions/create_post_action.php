<?php
require_once($_SERVER["DOCUMENT_ROOT"]. "/conn.php"); // connect to data base

/*
Publish Post
Must be logged in
check role is less than 3
article is published under the current user - whatever their session id is
take us back to the users articles
*/

$errors = [];

session_start();
if( isset($_SESSION["user_id"]) && ( $_SESSION["role"] < 3) ):
    // get current user by SESSION id
    $user_id = $_SESSION["user_id"];
    $title = htmlspecialchars($_POST["title"], ENT_QUOTES);
    $content = htmlspecialchars($_POST["content"], ENT_QUOTES);
    $date_created = date("Y-m-d H:i:s"); //year month day hours mintues seconds


    ////////////////////////
    // UPLOAD IMAGE
    ///////////////////////
    
    if( isset($_FILES["featured_image"]) && $_FILES["featured_image"]["error"] == 0) {
        if(
            (   $_FILES["featured_image"]["type"] == "image/jpeg" || 
                $_FILES["featured_image"]["type"] == "image/jpg" || 
                $_FILES["featured_image"]["type"] == "image/png" || 
                $_FILES["featured_image"]["type"] == "image/gif"
            ) 
                &&
                $_FILES["featured_image"]["size"] < 2000000000
        ) {
            // file is correct type and size
            

            $file_name = $_SERVER["DOCUMENT_ROOT"] . "/uploads/" . $_FILES["featured_image"]["name"];
            //check if file already exists
            if( !file_exists($_SERVER["DOCUMENT_ROOT"] . "/uploads/" . $_FILES["featured_image"]["name"]) ) {
                // store in temp and then if file is there move to uploads
                //upload to uploads folder
                if(move_uploaded_file(
                    $_FILES["featured_image"]["tmp_name"], 
                    $_SERVER["DOCUMENT_ROOT"] . "/uploads/" . $_FILES["featured_image"]["name"]) ) {
                        //insert into database the image
                        $insert_image_query = "INSERT INTO images (url, owner_id) VALUES ('".str_replace($_SERVER["DOCUMENT_ROOT"], "" , $file_name)."',$user_id)";
                            if(mysqli_query($conn, $insert_image_query) ){
                                $featured_image_id = mysqli_insert_id($conn);
                            }
                    }

            } else {
                $errors[] = "File already exists";
            }
        
        } else {
            $errors[] = "Incorrect file type";
        }
    } else {
        $featured_image_id = "NULL"; // if there is no image id at least it is not empty
    }

   


    if($title != "" && $content != "") {
        // Title and conecnt are filled, continue.  Define each of the fields that were insterted into php database
        $query = "INSERT INTO articles 
                              (title, content, image_id, author_id, date_created, date_modified)
                  VALUES ('$title', '$content', $featured_image_id, $user_id, '$date_created', '$date_created')";

        if(mysqli_query($conn, $query)) { // if the query qorked and inserted into the datebase with no errors
            $article_id = mysqli_insert_id($conn); // get id of last entry in database
            header("Location: http://" . $_SERVER["SERVER_NAME"] . "/articles.php?id=" . $article_id); // go back to article that was just created using arcitle id that was just set
        } else {
            $errors[] = "Something went wrong:" .mysqli_error($conn);
        }
    } else {
        // Title or content are empty
        $errors[] = "Please fill out fields";
    }

else:
    header("Location: http://".$_SERVER["SERVER_NAME"]);
endif;

///////////////////////////
// CHECK FOR ERROS ARRAY
///////////////////////////

// runn thru all if statments coolect all the erros that might be happening and run them, put it into the address bar
// then send back to previous page
// then remove everything after the ? then add only the new query back

if( !empty($errors)) {
    $query = http_build_query( array("errors" => $errors));
    header("Location:" . strtok($_SERVER["HTTP_REFERER"], "?" ) . "?" . $query); // use the SERVER NAME to go back to profile page
}
?>