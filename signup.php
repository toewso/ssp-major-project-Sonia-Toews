<?php
require_once("header.php");
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Sign-up for Free Account </h1>
        </div>
        <form class="col-12" method="post" action="/actions/login.php">
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
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
            </div>
            <div class="form-group col-md-6">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
            </div>
         </div>
        <div class="form-row">
            <div class="form-group col-12">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <div class="form-group col-md-6">
                <label for="password2">Confirm Password</label>
                <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm Password">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" name="address2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity" name="city">
            </div>
            <div class="form-group col-md-4">
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
            <div class="form-group col-md-2">
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
            Sign-up for Newsletter?
            <div class="form-check">
                <input class="form-check-input" type="radio" name="newsletter" id="newsletter_yes" value="true" checked>
                <label class="form-check-label" for="newsletter_yes">
                    Yes
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="newsletter" id="newsletter_no" value="false">
                <label class="form-check-label" for="newsletter_no">
                    No
                </label>
            </div>
        </div>
            <button type="submit" class="btn btn-primary" name="action" value="signup">Sign in</button>
        </form>
    </div>
</div>







<?php
require_once("footer.php");
?>