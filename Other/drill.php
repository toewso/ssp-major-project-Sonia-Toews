<?php
require_once("header.php");
?>

<div class="container">
    <div class="row">
        <div class="col-12"><h1>Drill 1</h1></div>
            <?php
            // use AS to rename province_name
            // astrix is all or you can specify 
            $query = " SELECT *
                    FROM users.*, provinces.name AS province_name 
                    LEFT JOIN provinces
                    ON users.province_id = provinces.id"; // joining the prov table in order to get the right prov match with the user id php table

                    if($result = mysqli_query($conn, $user_query)):
                        echo "<ul>";
                        // if there are results pass it into the while statment loop indiviual list items.  If there is not info there won't be a ul
                        while($row = mysqli_fetch_array($result)): 
                            echo "<li>";
                            echo $row["first_name"] . " " .$row["last_name"]. " lives in ". $row["province_name"];
                            echo date ("l", strtotime($row["date_created"]) ); // l is the character for monday. Pass it the current date from our table
                        endwhile;
                        echo "</ul>";
                    endif;

                    // $row["province_name"] // or else it would be just "name" which is not very descriptive
            ?>
    </div>
</div>
















<?php
require_once("footer.php");
?>