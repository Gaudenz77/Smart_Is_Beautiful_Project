<?php 
session_start();

// load tools
include './includes/tools.php';

// if is set get quiz data from session
if (isset($_SESSION["quiz"]))  $quiz = $_SESSION["quiz"];
    else $quiz = null;
  
    /* prettyPrint($quiz, '$quiz ='); */


    if (isset($_POST["lastQuestionIndex"])) {


        $lastQuestionIndex = intval($_POST["lastQuestionIndex"]);
    }
    else {
        $lastQuestionIndex = -1;
    }

    /* prettyPrint($lastQuestionIndex, '$lastQuestionIndex ='); */


// https://www.php.net/manual/en/reserved.variables.server.php
    $scriptname = $_SERVER['SCRIPT_NAME'];
   /*  echo "scriptName = " . $scriptname. "\n"; */
    /* prettyPrint($scriptname, '$scriptname ='); */

// https://www.php.net/manual/en/function.str-contains.php
// index.php uses................................................................
    if (str_contains($scriptname, 'index')) {
        session_unset();


        $quiz = null;
    }
    
// questions.php uses................................................................
else if (str_contains($scriptname, 'questions')) {
    if ($lastQuestionIndex === -1){  // -1 means quiz has not started yet
        // Now start quiz
           $quiz = array(
            "topic" => $_POST["topic"],
            "questionNum" => $_POST["questionNum"],
            "lastQuestionIndex" => $lastQuestionIndex,
            "currentQuestionIndex" => -1,
            "questionIdSequence" => array(),
           ); 
    }
    prettyPrint($quiz,'$quiz =  ');

    $indexStep = 1;
    prettyPrint($indexStep, '$indexStep= ');
    if (isset($_POST["indexStep"])) {
        $indexStep = intval($_POST["indexStep"]);
    }

    $currentQuestionIndex = $lastQuestionIndex + $indexStep;
    prettyPrint($currentQuestionIndex, '$currentQuestionIndex= ');
    
}

    $result = array(
    /*     "question1" => $_POST["question1"],
        "question2" => $_POST["question2"],
        "question3" => $_POST["question3"],
        "question4" => $_POST["question4"],
        "question5" => $_POST["question5"],
        "question6" => $_POST["question6"],
        "question7" => $_POST["question7"],
        "question8" => $_POST["question8"],
        "question9" => $_POST["question9"],
        "question10" => $_POST["question10"], */
    );

// DEVONLY: Gibt die aktuelle Session in die Seite aus zum checken
/* prettyprint($_SESSION);
prettyprint($_GET); */
?>