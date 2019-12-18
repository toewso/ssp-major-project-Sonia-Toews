<?php
require_once("header_copy2.php");
?>
<div class="signup_page">
<div class="container signup">

    <div class="row">
    
        <form class="col-md-12" method="post" action="/actions/login.php">
        <h1>Sign-up for a Free Account </h1>
            <?php
            include($_SERVER["DOCUMENT_ROOT"] . "/includes/error_check.php");
            ?>
        
           
        <!-- 
            First Name/ Last NAme
            Email
            Address
            Province
            Postal
            Password
            Confirm Password
        -->
         <div class="form-row">
            <div class="form-group col-md-6">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name">
            </div>
            <div class="form-group col-md-6">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name">
            </div>
         </div>
        <div class="form-row">
            <div class="form-group col-12">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group col-md-6">
                <label for="password2">Confirm Password</label>
                <input type="password" class="form-control" id="password2" name="password2">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" name="address">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" name="address2">
        </div>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4 my-dropdown">
                <label for="province">Province</label>
                    <select id="province" class="form-control" name="province">
                    <option selected disabled>Choose...</option>
                    <?php
                    $provinces = [
                        "British Columbia",
                        "Alberta",
                        "Saskatchewan",
                        "Manitoba",
                        "Ontario",
                        "Quebec",
                        "New Brunswick",
                        "Nova Scotia",
                        "PEI",
                        "Nunavit",
                        "Labradour",
                        "Yukon",
                        "NWT",
                    ];
                    for($i = 0; $i < count($provinces); $i++) {
                        echo "<option value='".($i + 1)."'>$provinces[$i]</option>";
                    }
                    ?>
                    </select>
            </div>
            <div class="form-group col-md-3">
                <label for="postal_code">Postal Code</label>
                <input type="text" class="form-control" id="postal_code" name="postal_code">
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="agree_terms" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Do you agree to our Terms &amp; Conditions?
                </label>
            </div>
        </div>
        <div class="form-group">
            <span id="newsletter">Sign Up for Newsletter?</span>
            <!--<div class="form-check custom-radio">
                <input class="form-check-input" type="radio" name="newsletter" id="newsletter_yes" value="true" checked>
                <label class="form-check-label" for="newsletter_yes">
                    Yes
                </label>
            </div>
            <div class="form-check custom-radio">
                <input class="form-check-input" type="radio" name="newsletter" id="newsletter_no" value="false">
                <label class="form-check-label" for="newsletter_no">
                    No
                </label>
            </div>-->
            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" name="newsletter" class="custom-control-input" value="true" checked>
                <label class="custom-control-label" for="customRadio1">Yes</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" name="newsletter" class="custom-control-input" value="false">
                <label class="custom-control-label" for="customRadio1">No</label>
            </div>
        </div>
            <button type="submit" class="btn btn-danger" name="action" value="signup">Sign Up</button>
            <p><a class="already" href="index.php">Already have an account?</a></p> 
        </form>
    </div>
</div>









<?php
require_once("footer.php");
?>


</div>