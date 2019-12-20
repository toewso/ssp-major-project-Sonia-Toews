<?php

if(!empty($errors)) $_GET["errors"] = $errors;

echo "<div class='container alerts'>";
if( isset($_GET["errors"]) ) {
    foreach($_GET["errors"] as $error) {
        echo "<p class='alert alert-danger col-md-5'>" . $error ."</p>";
    }
} elseif(isset($_GET["success"]) ) {
        echo "<p class='alert alert-success'>" . $_GET["success"] . "</p>";
}
echo "</div>";

?>