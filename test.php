<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

$file= file_get_contents('questionSet/questions.json');
$questions = json_decode($file,true);

if ($_SESSION['difficultyLevel'] <= 2){
    $_SESSION['questionLevel'] = "level1";
    $_SESSION['currentQuestionmark'] = 2;
}elseif ($_SESSION['difficultyLevel'] >= 3 && $_SESSION['difficultyLevel'] <= 4) {
    $_SESSION['questionLevel'] = "level2";
    $_SESSION['currentQuestionmark'] = 4;
}
elseif ($_SESSION['difficultyLevel'] >= 5 && $_SESSION['difficultyLevel'] <= 6) {
    $_SESSION['questionLevel'] = "level3";
    $_SESSION['currentQuestionmark'] = 6;
}else {
    echo "Error Occured ! Contact Admin";
}

echo $_SESSION['difficultyLevel'];
echo $_SESSION['questionNumber'];
echo $_SESSION['questionLevel'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Test | Project ExamOne</title>
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
     <div uk-grid>
       <div class="uk-width-2-3">
         <div class="uk-card uk-card-default uk-card-body uk-margin uk-margin-medium-left">
          <p>
            <?php
                echo $questions[$_SESSION['questionLevel']][$_SESSION['questionNumber']]['question'];
                $_SESSION['correctOption'] = $questions[$_SESSION['questionLevel']][$_SESSION['questionNumber']]['correctOption'];
            ?>
          </p>
         </div>
         <div class="uk-card uk-card-default uk-card-body uk-margin-medium-left uk-overflow-auto">
             <form method="post" action="php/evaluate.php">
                 <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
                   <tbody>
                     <tr>
                       <td><input class="uk-radio" type="radio" name="selectedOption" value="option1">
                           <span>
                               <?php
                                   echo $questions[$_SESSION['questionLevel']][$_SESSION['questionNumber']]['option1'];
                               ?>
                           </span>
                       </td>
                     </tr>
                     <tr>
                       <td><input class="uk-radio" type="radio" name="selectedOption"  value="option2">
                           <span>
                               <?php
                                   echo $questions[$_SESSION['questionLevel']][$_SESSION['questionNumber']]['option2'];
                               ?>
                           </span>
                       </td>
                     </tr>
                     <tr>
                       <td><input class="uk-radio" type="radio" name="selectedOption"  value="option3">
                           <span>
                               <?php
                                   echo $questions[$_SESSION['questionLevel']][$_SESSION['questionNumber']]['option3'];
                               ?>
                           </span>
                       </td>
                    </tr>
                     <tr>
                       <td><input class="uk-radio" type="radio" name="selectedOption"  value="option4">
                           <span>
                               <?php
                                   echo $questions[$_SESSION['questionLevel']][$_SESSION['questionNumber']]['option4'];
                               ?>
                           </span>
                       </td>
                     </tr>
                   </tbody>
                 </table>

         </div>
       </div>
       <div class="uk-width-1-3">
         <div class="uk-card uk-card-default uk-card-body uk-margin-medium-right">
           <button class="uk-button uk-button-default uk-margin uk-width-medium" type="submit">Submit this question</button>
       </form>
           <a class="uk-button uk-button-default uk-width-medium" href="result.php">End Test</a>
         </div>
       </div>
     </div>
    </div>

    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
  </body>
</html>
