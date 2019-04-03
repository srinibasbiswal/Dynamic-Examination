<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Instructions | Project ExamOne</title>
    <link rel="stylesheet" href="css/uikit.min.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <nav class="uk-navbar uk-background-primary" uk-navbar>
        <div class="uk-navbar-left">
          <ul class="uk-navbar-nav">
              <li>
                  <a class="uk-text-lead heading" href="#">Dynamic Examination</a>
              </li>
          </ul>
        </div>
      <div class="uk-navbar-right">
        <ul class="uk-navbar-nav">
          <li class="uk-active"><a href="#">Hi! <?php echo htmlspecialchars($_SESSION["name"]); ?></a></li>
          <li><a href="php/logout.php">Log Out</a></li>
        </ul>
      </div>
    </nav>

    <div class="uk-margin">
      <div class="uk-margin">
          <div>
              <h1 class="uk-heading-primary uk-text-center">Instructions</h1>
          </div>
          <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-box-shadow-medium uk-margin-large-left uk-margin-large-right">
              <ul class="uk-list uk-list-bullet">
                <li>Instructions 1</li>
                <li>Instructions 2</li>
                <li>Instructions 3</li>
            </ul>
          </div>
      </div>
      <div class="uk-margin uk-text-center">
       <a class="uk-button uk-button-primary uk-border-rounded" href="test.php">Start Test</a>
      </div>
    </div>

    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
  </body>
</html>
