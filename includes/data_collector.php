<?php 
session_start();

// load tools
include './includes/tools.php';
include './includes/db_connect.php';

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
else if (str_contains($scriptname, 'question')) {
    if ($lastQuestionIndex === -1){  // -1 means quiz has not started yet
        // Now start quiz
        $topic = $_POST["topic"];
$questionNum = intval($_POST["questionNum"]);

$questionIdSequence = fetchquestionIdSequence(
    $topic,
    $questionNum,
    $dbConnection
);

$questionNum = min(count($questionIdSequence), $questionNum);

           $quiz = array(
            "topic" => $topic,
            "questionNum" => $_POST["questionNum"],
            "lastQuestionIndex" => $lastQuestionIndex,
            "currentQuestionIndex" => -1,
            "questionIdSequence" => $questionIdSequence,
           ); 
    }
    /* prettyPrint($quiz,'$quiz =  '); */

    $indexStep = 1;
    /* prettyPrint($indexStep, '$indexStep= '); */
    if (isset($_POST["indexStep"])) {
        $indexStep = intval($_POST["indexStep"]);
    }

    $currentQuestionIndex = $lastQuestionIndex + $indexStep;
    /* prettyPrint($currentQuestionIndex, '$currentQuestionIndex= '); */
    
}




// DEVONLY: Gibt die aktuelle Session in die Seite aus zum checken
/* prettyprint($_SESSION);
prettyprint($_GET); */
?>