<?php

require_once( $_SERVER["DOCUMENT_ROOT"]. "/conn.php");

$errors = [];

// if the button action was login - button value is login

if( isset($_POST["action"]) && $_POST["action"] == "login") :
    // get the users email and password
    // connec to users table
    // check if user exists and password matches
    // if not, send error
    // if correct, login and go to index


    if( 
        (isset($_POST["email"]) && $_POST["email"] != "") &&  
        (isset($_POST["password"]) && $_POST["password"] != "")
    ) { 
        $email = $_POST["email"];
        $password = md5($_POST["password"]); // hash the password

        $query_users = "SELECT * 
                        FROM users 
                        WHERE email = '".$email."'
                            AND password = '".$password."'";
        $user_result = mysqli_query($conn, $query_users);
        
        // check if user was in database
        //print_r(mysqli_num_rows($user_result));
        
        if( mysqli_num_rows($user_result) > 0 ){
            // if greater than 0 user is found, else send back an error
            
            // get all the users rows from the database
            while($user = mysqli_fetch_array($user_result)) {
                //print_r($user);
                //set session vairables to that user destroy current session and start fresh session
                session_destroy();
                session_start();

                $_SESSION["email"] = $user["email"]; // session will keep the email
                $_SESSION["role"] = $user["role"];
                $_SESSION["user_id"] = $user["id"];

                header("Location: http://" . $_SERVER["SERVER_NAME"] );
                
            }
        } else {
            $errors[] = "Email or password incorect";
        }


    } else {
        $errors[] = "Please fill out Username and Password";
    }

// if action is SIGNUP 
elseif( isset($_POST["action"]) && $_POST["action"] == "signup") :


    $first_name  = $_POST["first_name"];
    $last_name   = $_POST["last_name"];
    $email       = $_POST["email"];
    $password    = md5($_POST["password"]);
    $password2   = md5($_POST["password2"]);
    $address     = $_POST["address"];
    $address2     = $_POST["address2"];
    $city        = $_POST["city"];
    $province_id = ( isset($_POST["province"]) ) ? $_POST["province"] : 0 ; 
    $postal_code = $_POST["postal_code"];
    $agree_terms = $_POST["agree_terms"];
    $newsletter  = $_POST["newsletter"];

    //echo "<pre>";
    //print_R($_SERVER);
 

  if($password == $password2 && strlen($password) > 7) {
      // continue
      if( isset($_POST["agree_terms"])) {
        // continue
            if($email != "" && $first_name != "" && $last_name != "") {
                // I MADE IT!!!

                $new_user_query = "INSERT INTO users (email,
                                                    password,
                                                    role,
                                                    first_name,
                                                    last_name,
                                                    address,
                                                    address2,
                                                    city,
                                                    province_id,
                                                    postal_code,
                                                    newsletter) 
                                            VALUES ('$email',
                                                    '$password',
                                                    2, 
                                                    '$first_name', 
                                                    '$last_name', 
                                                    '$address', 
                                                    '$address2', 
                                                    '$city', 
                                                    $province_id, 
                                                    '$postal_code', 
                                                    $newsletter)";
                if( !mysqli_query($conn, $new_user_query)) {
                    echo mysqli_error($conn);
                } else {
                    //log user in and go to home page
                    $user_id = mysqli_insert_id($conn); // what is the last inserted ID - like errors
                    session_destroy();
                    session_start();
                    // grab ID and all userinfo from just signing up and carry it through session - all pages
                    $_SESSION["user_id"] = $user_id;
                    $_SESSION["role"] = 2;
                    $_SESSION["email"] = $email;

                    header("Location: http://" . $_SERVER["SERVER_NAME"]);
                }

                // END I MADE IT!!!
            } else {
                $errors[] = "Please fill required fields";
            } 
        } else {
            $errors[] = "You must agree to our terms";
         } 
    } else {
         $errors[] = "Passwords do not match";
    }

  

    // if logout button clicked
elseif( isset($_REQUEST["action"]) && $_REQUEST["action"] == "logout") :
    session_destroy();
    header("Location: http://" . $_SERVER["SERVER_NAME"] . "?" . $query);
endif;

if( !empty($errors)) {
    $query = http_build_query( array("errors" => $errors));
    header("Location:" . strtok($_SERVER["HTTP_REFERER"], "?" ) . "?" . $query);
}

//getting local host and refreshing


?>