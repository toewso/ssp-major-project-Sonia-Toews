 <?php
if( isset($_GET["errors"]) ) {
    foreach($_GET["errors"] as $error) {
        echo "<p class='alert alert-danger'>" . $error ."</p>";
    }
} elseif(isset($_GET["success"]) ) {
        echo "<p class='alert alert-success'>" . $_GET["success"] . "</p>";
    
}
?>