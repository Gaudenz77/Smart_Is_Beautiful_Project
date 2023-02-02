<?php require "./includes/data_collector.php";?>
<?php require "./includes/html_head_tag.php";?>
<body>

<?php
require "./includes/header.php";
?>

<?php
/* $id = 501; */
// Bestimme die Anzahl der verfügbaren Fragen
if (isset($quiz["questionIdSequence"])) {
  $id = $quiz["questionIdSequence"][$currentQuestionIndex];
}
$question = fetchquestionById($id, $dbConnection);

?>

<main>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-8 animate__animated animate__lightSpeedInRight animate__slow">
        <h1 class="display-2"><b>Smart Is Beautiful</b><br> ... Are You?</h1>
        <h3>Dear Smartypants: You Did Chose '<?= $quiz["topic"] ?>':</h3>
        <p id="errorMessage"></p>
        <p>Question <?php echo ($currentQuestionIndex + 1); ?> of <?php echo $quiz["questionNum"]; ?></p> 
    <!-- <p>Question --> <?php /* echo ($currentQuestionIndex + 1);  */?> <!--  of --> <?php /* echo $totalQuestions;  */?></p>   <!-- <?php /* echo quiz['questionNum'];  */?> -->
        <label for="question"><?php echo $question['question_text'];?></label>
        <form id="quiz-form" action="<?php echo $actionUrl; ?>" method="post" onsubmit="return navigate('next');">  <!-- return validateForm(); -->
        
        <?php
        // generate answer-radio-buttons with labels
        // single choice get the name of the corexct answer row in $correct from $question['correct]
        $correct = $question['correct'];  

        for ($a = 1; $a <= 5; $a++) {
          // combine for $answerColumnName the name of the table-row "answer-n"
          $answerColumnName = "answer-" . $a;
          // if there is an answer

          // get the Name of the correct answer - row in $correct $question['answerColumnName']

          if(isset($question[$answerColumnName])  && $question[$answerColumnName] !== '') {
            // get answertext
            $answerText = $question[$answerColumnName];

            if($correct === $answerColumnName) $value = 1;
            else $value = 0;
            // MAIN STRUCTURE RADIO BUTTONS, EXPANDABLE
            echo "<div class='form-check'>
            <input class='form-check-input' type='radio' name='single-choice' id='$answerColumnName' value='$value'>
            <label class='form-check-label' for='single-choice-0'>$answerText</label></div>";
          }
        }

        ?>

  <input type="hidden" id="questionNum" value="15">
  <input type="hidden" id="lastQuestionIndex" name="lastQuestionIndex" value="<?php echo $currentQuestionIndex; ?>">
  <input type="hidden" id="indexStep" name="indexStep" value="1">

   <!-- Form FIELDS End--------------------------------------------------------------------------------------- -->    
     
    </div>
  </div>
</div>
</main>
<!-- FOOTER START ------------------------------------------------------------------------------------------------------>
<div class="footer">
  <div class="container">
    <div class="row text-center">
  
      <div class="col-sm">
          <h1>Footer</h1>
          <p><?php echo  "© " . date("Y/m/d") ." &#129322 " ?></p>
      </div>

      <div class="col-sm pt-3 order-first order-md-last">
      <a class="btn btnColor" href='index.php'><i class="fa-solid fa-circle-chevron-left fa-3x"><p class="btnFont py-1">BACK</p></i></a>
      <button type="submit" class="btn" role="button"><i class="fa-solid fa-circle-play fa-4x"><p class="btnFont py-1">Next Question</p></i></button></div>
      
<!-- END MAIN FORM TAG ----------------------------------------------------------------------------------->
      </form>

      <div class="col-sm">
<!-- Include search bar -->
      <button id="toggleBtn" class="btn btnColor m-3 p-2" onclick="helpNeededQuestionmark()"><i class="fa-regular fa-circle-question fa-2x"><p class="btnFont py-1">Need Some Help?</p></i></button>
          <div id="text" style="display: none">
          <p><?php require "./includes/serachbar.php";?></p></div>

          </div>
        </div>
      </div>  
    </div>

  <script src="/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
