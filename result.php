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
    <title>Summary | Project ExamOne</title>
    <link rel="stylesheet" href="css/uikit.min.css" />
  </head>
  <body>
    <nav class="uk-navbar-container" uk-navbar>
      <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
          <li class="uk-active"><a href="#">Active</a></li>
          <li><a href="#">Item</a></li>
        </ul>
      </div>

      <div class="uk-navbar-right">
        <ul class="uk-navbar-nav">
          <li class="uk-active"><a href="#">Hi! <?php echo $_SESSION['name'] ?></a></li>
          <li><a href="php/logout.php">Log Out</a></li>
        </ul>
      </div>
    </nav>

    <div class="uk-margin">
      <div class="uk-margin">
        <h1 class="uk-heading-primary uk-text-center">Thank You! For taking the Test</h1>
        <div class="uk-card uk-card-default uk-card-body uk-width-1-2">
            <h3>Your Results</h3>
            <ul class="uk-list uk-list-striped">
              <li>Total Questions : <?php echo $_SESSION['questionNumber'];?></li>
              <li>Total Correct Answers : <?php echo $_SESSION['totalCorrectAnswer']; ?> </li>
              <li>Total Marks Secured : <?php echo $_SESSION['marks'];?></li>
          </ul>
        </div>
    </div>

    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
  </body>
</html>
