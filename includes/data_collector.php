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

    if ($currentQuestionIndex + 1 < $quiz["questionNum"]){
        $actionUrl = "questions.php";
    }
    else {
         $actionUrl = "report.php";
    }
}
    else if (str_contains($scriptname, 'report')) {
        $currentQuestionIndex = -1;
}
    else{
}

// safe quizdata and POST-data of last question of a session
    if (isset($quiz) && $currentQuestionIndex >= 0) {
        $_SESSION['quiz'] = $quiz;
        $_SESSION['quiz']['lastQuestionIndex'] = $lastQuestionIndex;
        $_SESSION['quiz']['currentQuestionIndex'] = $currentQuestionIndex;
        
}

    if ($lastQuestionIndex >= 0) {  // Caution: Only For valid question input
        $questionName = "question-" . $lastQuestionIndex;
        $_SESSION[$questionName] = $_POST;
     
}

/* function displayQuestions($dbConnection) {
    // Retrieve the question IDs from the session
    $questionIdSequence = $_SESSION['questionIdSequence'];
  
    // Prepare the SQL query to retrieve the question data
    $placeholders = implode(',', array_fill(0, count($questionIdSequence), '?'));
    $sql = "SELECT `question_text`, `answer-1`, `answer-2`, `answer-3`, `answer-4`, `answer-5`, `correct` FROM questions WHERE id IN ($placeholders)";
    $stmt = $dbConnection->prepare($sql);
  
    // Bind the question IDs as parameters to the query
    foreach ($questionIdSequence as $i => $id) {
        $stmt->bindValue($i + 1, $id);
    }
  
    // Execute the query and retrieve the question data
    $stmt->execute();
    $questions = $stmt->fetchAll(PDO::FETCH_ASSOC);
  } */
/* 
javascript decides onclick on 'previous' or 'next' button whats the target page

look main.js function navigates (direction)

php does not do NOCHECKS  or REDSIRECTS (Hard to do), tricky for u need 2 know WHEN session star() has to be set

if ($currentQuestinIndex < 0)
*/

/* prettyPrint($_SESSION, '$_SESSION= ');
 */
// DEVONLY: Gibt die aktuelle Session in die Seite aus zum checken
/* prettyprint($_SESSION);
prettyprint($_GET); */

?>