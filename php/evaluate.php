<?php
    session_start();

    $selectOption = $_POST['selectedOption'];
    echo $selectOption;

    if ($selectOption == $_SESSION['correctOption']){
        if ($_SESSION['difficultyLevel']<=6) {
            $_SESSION['difficultyLevel'] = $_SESSION['difficultyLevel']+1;
        }
        $_SESSION['marks'] = $_SESSION['marks'] + $_SESSION['currentQuestionmark'];
        $_SESSION['totalCorrectAnswer'] = $_SESSION['totalCorrectAnswer']+1;
    }else{
        if ($_SESSION['difficultyLevel'] > 1){
            $_SESSION['difficultyLevel'] = $_SESSION['difficultyLevel']-1;
        }
    }
    if ($_SESSION['questionNumber']<9) {
        $_SESSION['questionNumber'] = $_SESSION['questionNumber'] + 1;
    }
    if ($_SESSION['questionNumber']==9) {
        header("location: ../result.php");
    }

    header("location: ../test.php");

?>
