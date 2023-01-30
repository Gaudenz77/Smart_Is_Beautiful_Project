<?php require "./includes//session_start.php";?>
<?php require "./includes/html_head_tag.php";?>
<body>
<!-- HEAD TAG MIGHT BE INCLUDED DIRECTLY IN EACH PAGE // MUST BE TESTED, POSSIBLE ERRORS //-->
<?php
require "./includes/header.php";
?>
<?php 
require "./includes/db_connect.php";

/* echo "$dbHost $dbname $dbUser $dbPassword"; */ // TEST DEV ONLY

//print_r($row); 
$id = 501;
/* $currentQuestionIndex;
$totalQuestions = 20;
$statement = "Question " . ($currentQuestionIndex + 1) . " of " . $totalQuestions;
$quiz = $id; */


$question = fetchquestionById($id, $dbConnection);
try {
$query = $dbConnection->query("SELECT COUNT(*) From `questions`");
    $row = $query->fetch(PDO::FETCH_ASSOC);
    $questionCount = $row["COUNT(*)"];
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    $questionCount = 0;
}
$currentQuestionIndex = 0;
/* echo "Number of questions: " . ($questionCount - 1); */
?>
<?php
require "./includes/tools.php";
/* print_r($row); */
/* print_r($_SESSION);"<br>"; */
/* prettyPrint($row); */
?>

<main class="animate__animated animate__lightSpeedInRight animate__slow">
<div class="container">
  <div class="row">
    <div class="col-sm">
      <h1 class="display-2"><b>Quiz:</b><br>Smart Is Beautiful ... Are You?</h1>
      <h3>Dear Smartypants: You Did Chose <?php echo $question['topic'];?>:</h3>
      <p id="errorMessage"></p>


  <p><?php echo ($currentQuestionIndex + 1); ?> of <?php echo ($questionCount - 1); ?></p>
      <label for="question1"><?php echo $question['question_text'];?></label>
      <form id="quiz-form" action="questions.php" method="post" onsubmit="return validateForm();return navigate('next');">
      
      <?php
      // generate answer-radio-buttons with labels
      // single choice get the name of the corexct answer row in $correct from $question['correct]
      $correct = $question['correct'];  

      for ($a = 1; $a <= 5; $a++) {
        // combine for $answerColumnName the name of the table-row "answer-n"
        $answerColumnName = "answer-" . $a;
        // if there  is an answer

       
        // get the Name of the correct answer - row in $correct $question['answerColumnName']

        if(isset($question[$answerColumnName])  && $question[$answerColumnName] !== '') {
          // get answertext
          $answerText = $question[$answerColumnName];

          if($correct === $answerColumnName) $value = 1;
          else $value = 0;
          echo "<div class='form-check'>
          <input class='form-check-input' type='radio' name='single-choice' id='$answerColumnName' value='$value'>
          <label class='form-check-label' for='single-choice-0'>$answerText</label></div>";

        }

        
      }

      ?>
  <!-- Form FIELDS Start--------------------------------------------------------------------------------------- -->    
      <!-- <form id="" action="question.php" method="post" onsubmit="return validateForm();"> 
      <p id="errorMessage"></p>
            <div class="form-group p-4">
          <label for="question1"><?php /* echo $question['question_text']; */?></label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question_id" id="question_id" value="$id">
            <label class="form-check-label" for="option1"><?php /* echo $question['answer-1']; */?></label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question1" id="question_id" value="$id">
            <label class="form-check-label" for="option2"><?php /* echo $question['answer-2'] */;?></label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question1" id="question_id" value="$id">
            <label class="form-check-label" for="option3"><?php /* echo $question['answer-3']; */?></label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question1" id="question_id" value="$id">
            <label class="form-check-label" for="option4"><?php /* echo $question['answer-4'] */;?></label>
          </div> -->

   <!-- Form FIELDS End--------------------------------------------------------------------------------------- -->    
     
    </div>
  </div>
</div>
</main>

<div class="footer">
  <div class="container">
    <div class="row text-center">
      <div class="col-sm">Left</div>
      <div class="col-sm">
          <h1>Footer</h1>
          <p><?php echo  "© " . date("Y/m/d") ." &#129322 " ?></p>
      </div>
      <div class="col-sm pt-3  order-first order-md-last">
      <a class="btn btnColor" href='index.php'><i class="fa-solid fa-circle-chevron-left fa-3x"></i><p class="btnFont">BACK</p></a>
      <button type="submit" class="btn btn-primary btn-lg" role="button">Next Question</a>
      </div>
    </div>
  </div>  
</div>

</form>
<script src="/js/main.js"></script>
  <!-- Form  End--------------------------------------------------------------------------------------- -->    
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
</body>
</html>
