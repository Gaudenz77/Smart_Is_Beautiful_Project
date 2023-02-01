<?php 
session_start();

// load tools
include './includes/tools.php';
include './includes/db_connect.php';
  
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

    // if is set get quiz data from session
    if (isset($_SESSION["quiz"])) $quiz = $_SESSION["quiz"];
    else $quiz = null;

// https://www.php.net/manual/en/function.str-contains.php
// index.php uses................................................................
    if (str_contains($scriptname, 'index')) {
        session_unset();
        $quiz = null;
    }
    
// questions.php uses................................................................
else if (str_contains($scriptname, 'questions')) {
    if ($lastQuestionIndex === -1) {  // -1 means quiz has not started yet
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
            "questionIdSequence" => $questionIdSequence
        ); 
    }

    $indexStep = 1;

    if (isset($_POST["indexStep"])) {
        $indexStep = intval($_POST["indexStep"]);
    }

    $currentQuestionIndex = $lastQuestionIndex + $indexStep;
}
// safe quizdata and POST-data of last question of a session
if (isset($quiz) && $currentQuestionIndex >= 0) {
    $_SESSION['quiz'] = $quiz;
    $_SESSION['quiz']['lastQuestionIndex'] = $lastQuestionIndex;
    $_SESSION['quiz']['currentQuestionIndex'] = $currentQuestionIndex;
}

if ($lastQuestionIndex >= 0) {  // Caution: Only For valid question input
    /* echo "HaLOOOOO!!! $lastQuestionIndex"; */
    $questionName = "question-" . $lastQuestionIndex;
    $_SESSION[$questionName] = $_POST;

}


if (isset($quiz)) {
    $_SESSION['quiz'] = $quiz;
    $_SESSION['quiz']['lastQuestionIndex'] = $lastQuestionIndex;
    $_SESSION['quiz']['currentQuestionIndex'] = $currentQuestionIndex;
}

if ($lastQuestionIndex >= 0) {  // Caution: Only For valid question input
    /* echo "HaLOOOOO!!! $lastQuestionIndex"; */
    $questionName = "question-" . $lastQuestionIndex;
    $_SESSION[$questionName] = $_POST;

}

if ($lastQuestionIndex == $currentQuestionIndex) {
    // store answers in session
    $_SESSION['answers'][$lastQuestionIndex] = $_POST['single-choice'];
  
    // redirect to report page
    header("Location: report.php");
    exit;
  }

prettyPrint($_SESSION, '$_SESSION= ');

/* $answers = $_SESSION['single-choice'];


// Display the report
echo "Report:<br>";
foreach ($answers as $index => $answer) {
    echo "Question " . ($index + 1) . ": " . $answer . "<br>";
}
 */

// DEVONLY: Gibt die aktuelle Session in die Seite aus zum checken
/* prettyprint($_SESSION);
prettyprint($_GET); */
?>