<?php
require_once("header.php");



// if the action ubtton is clicked and has value of add_item
// insert item into data base with INSERT statement

if(isset($_POST["action"]) && $_POST["action"] == "add_item") {
    $new_item = $_POST["input_item"]; // new_item is a name we made up. input_item is from the name on the form
    $new_item_query = "INSERT INTO shopping_list (name) VALUES ('$new_item')";
    mysqli_query($conn, $new_item_query); // this will work but usually put in an if statement for error checking alerts etc do an else and echo errors[], or use header to send back to a page etc

} elseif(isset($_GET["action"]) && $_GET["action"] == "delete") {
    print_r($_GET);
    $item_id = $_GET["id"]; // getting from the url action delete id
    $delete_query = "DELETE FROM shopping_list WHERE id = $item_id";
    if(mysqli_query($conn, $delete_query)) {}

} elseif(isset($_POST["action"]) && $_POST["action"] == "update_item") { // got update_item from the button value

  print_r($_POST);
   
    $item_id = $_POST["item_id"]; // getting item_id it from the hidden input
    $new_item_value = $_POST["input_item"]; // get input_item from the name of the input
  
    $update_query = "UPDATE shopping_list SET name = '$new_item_value' WHERE id = $item_id";
    mysqli_query($conn, $update_query);
    
}



    /*
    if(!mysqli_query($conn, $new_item_query)) {
        echo mysqli_error($conn);
    } 
    if it did not run give me error message. short way of writing the if statement
    */


    
?>

<div class="container">
    <div class="row">
        <div class="col-12"><h1>Drill 2</h1></div>
               
            <?php
            // select shopping list table output ids
                                  
            $shopping_list_query = "SELECT *
            FROM shopping_list";
                    // select the shopping_list table and out the itmes
                    if($results = mysqli_query($conn, $shopping_list_query)) { // pass the query, run query in if to only run if there is something there and check for errors
                        echo "<ul>";
                        while($shopping_list_row = mysqli_fetch_array($results)) {  // whlie loop through all the results row isn't telling it to be a row, we are tellign the row to be rows
                            echo "<li>" . $shopping_list_row["name"] . 
                            "<a href='?action=delete&id= ".$shopping_list_row["id"] ."'>x</a>
                             <a href='?action=edit&id=".$shopping_list_row["id"] ."'>Edit</a>
                             </li>";
                            
                            // each row is an array, select the item from an array with sqr brackets
                            //while you have results out put the list items
                        }
                        echo "</ul>";
                    } else {
                        echo mysqli_error($conn);
                    }
                   
            ?>
            
    </div>
<hr>
<form action="drill2.php" method="post">
  <div class="input-group">
    <div class="col-auto"> 
    <?php
    //if action is edit
    // select the item from the data base 
    // fill input field with item text
    // use SELECT and WHERE
    // if action is not set, leave field blank

    $item_value = ''; // made global variable value
    $button_value = "add_item";
    $button_text = "Add Item";

    if(isset($_GET["action"]) && $_GET["action"] == "edit") {
      $item_id = $_GET["id"]; // get the id from the a tag, GET gets from url
      // tell the site which item to edit, pass the ID of the item to edit
      ?>
      <input type="hidden" name="item_id" value="<?=$_GET["id"]?>"> <!-- got ID from above vairable of item_id -->


      <?php
      
      $edit_query = "SELECT *
                     FROM shopping_list
                     WHERE id = $item_id";
                     if($edit_results = mysqli_query($conn, $edit_query)) {
                       $button_value = "update_item";
                       $button_text = "Update Item";
                         while($item_row = mysqli_fetch_array($edit_results)) {
                           $item_value = $item_row["name"];
                         }
                     }
   }



    ?>
      <input type="text" class="form-control mb-2" name="input_item" value="<?=$item_value?>" placeholder="">
    </div>
    
    <div class="input-group-append">
      <button type="submit" class="btn btn-primary mb-2" name="action" value="<?=$button_value?>"><?=$button_text?></button>
    </div>
  </div>
</form>


</div>














<?php
require_once("footer.php");
?>