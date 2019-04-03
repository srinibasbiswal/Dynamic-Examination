<?php
// Include config file
require_once "config.php";

session_start();
$_SESSION['signup_err'] = "";

// Define variables and initialize with empty values
$email = $password = $contact_number = $name ="";
$email_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate username
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter an email.";
        $_SESSION['signup_err']  = $email_err;
        header("location: ../index.php");
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE email = ?";

        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_email);

            // Set parameters
            $param_email = trim($_POST["email"]);

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();

                if($stmt->num_rows == 1){
                    $email_err = "An account is already registered with this email.";
                    $_SESSION['signup_err']  = $email_err;
                    header("location: ../index.php");
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                $_SESSION['signup_err'] = "Oops! Something went wrong. Please try again later.";
                header("location: ../index.php");
            }
        }

        // Close statement
        $stmt->close();
    }

    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";
        $_SESSION['signup_err']  = $password_err;
        header("location: ../index.php");
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
        $_SESSION['signup_err']  = $password_err;
        header("location: ../index.php");
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    // if(empty(trim($_POST["confirm_password"]))){
    //     $confirm_password_err = "Please confirm password.";
    // } else{
    //     $confirm_password = trim($_POST["confirm_password"]);
    //     if(empty($password_err) && ($password != $confirm_password)){
    //         $confirm_password_err = "Password did not match.";
    //     }
    // }

    // Check input errors before inserting in database
    if(empty($email_err) && empty($password_err) ){

        $contact_number = trim($_POST["contact_number"]);
        $name = trim($_POST["name"]);

        // Prepare an insert statement
        $sql = "INSERT INTO users (email, password, contact_number, name) VALUES (?, ?, ?, ?)";

        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssss", $param_email, $param_password, $param_contact_number,$param_name);

            // Set parameters
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_contact_number = $contact_number;
            $param_name = $name;


            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: ../index.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        $stmt->close();
    }

    // Close connection
    $mysqli->close();
}
?>
