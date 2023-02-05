<?php require "./includes/data_collector.php";?>
<?php require "./includes/html_head_tag.php";?>
<body>
<!-- HEAD TAG MIGHT BE INCLUDED DIRECTLY IN EACH PAGE // MUST BE TESTED, POSSIBLE ERRORS //-->
<?php
require "./includes/header.php";
?>
<?php 
  $total_questions = $lastQuestionIndex; // number of questions in the quiz
  $correct_answers = 0;

  for ($i = 1; $i <= $total_questions; $i++) {
      $question_key = 'question-' . $i;
      if ($_SESSION[$question_key]['single-choice'] == 1) {
          $correct_answers++;
  }
}
  $result = ($correct_answers >= $total_questions / 2) ? "Well done, Smartypants!<img src='assets/img/smart_beautiful_positive.png' alt='good'>" : "Read A Book Sometimes...<img src='assets/img/smart_beautiful_negative.png' alt='image description'><br>Please Try Help-Need-Button Below Next Time.";

  $totalPoints = 0;
  foreach($_SESSION as $name => $value) {

  if (str_contains($name, 'question-')) {
  // if (isset($value["single-choice"])) {
      $points = intval($value["single-choice"]);
      $totalPoints = $totalPoints + $points;  // short $totalPoints += $points;
  }
}
$maxPoints = $_SESSION["quiz"]["questionNum"];

/* displayQuestions($dbConnection); */

// Output the data as a table
/* echo '<table>';
echo '<tr>';
echo '<th>Question Text</th>';
echo '<th>Answer 1</th>';
echo '<th>Answer 2</th>';
echo '<th>Answer 3</th>';
echo '<th>Answer 4</th>';
echo '<th>Correct Answer</th>';
echo '</tr>';
foreach ($questions as $question) {
    echo '<tr>';
    echo '<td>' . $question['question_text'] . '</td>';
    echo '<td>' . $question['answer-1'] . '</td>';
    echo '<td>' . $question['answer-2'] . '</td>';
    echo '<td>' . $question['answer-3'] . '</td>';
    echo '<td>' . $question['answer-4'] . '</td>';
    echo '<td>' . $question['answer-5'] . '</td>';
    echo '<td>' . $question['correct'] . '</td>';
    echo '</tr>';
}
echo '</table>';
 */
?>

<main class="animate__animated animate__lightSpeedInRight animate__slow">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-8">
      <h1 class="display-2">Smart Is Beautiful ... Are You?</h1>
      <h3>I Say:</h3>
      <h1 class="alert alert_success"><?php echo $result; ?></h1>
      <h4>You scored <?php echo $totalPoints; ?> points...My opinion is... I frankly said above.</4>
      <p>If you choose more than half of the questions correctly, you did good. Otherwise use the <strong>Need Some Help</strong> Button in the Footer.<br>You might actually learn something new there</p>
        <table class="table table-dark table-striped">
          <thead>
            <tr>
              <th>Question</th>
              <th>Answer</th>
              <th>Choice</th>
            </tr>
          </thead>
            <tbody>
            <?php

            $total_questions = $lastQuestionIndex; // number of questions in the quiz
            $correct_answers = 0;
            $correct = "Correct";
            $wrong = "Wrong";

            for ($i = 1; $i <= $total_questions; $i++) {
              $question_key = 'question-' . $i;
              $question_text = "Question $i"; // replace this with the actual question text
              $answer = ($_SESSION[$quiz][$question_key]['single-choice'] == 1) ? $correct : $wrong;
              $choice = $_SESSION[$quiz][$question_key]['single-choice'];
              echo "<tr><td>$question_text</td><td>$answer</td><td>$choice</td></tr>";

              if ($_SESSION[$question_key]['single-choice'] == 1) {
                  $correct_answers++;
              }
            }
            ?>
            </tbody>
        </table>
    </div>
  </div>
</div>
</main>

<div class="footer">
  <div class="container">
    <div class="row text-center">
      <div class="col-sm py-3">
        <!-- Include search bar -->
        <h1><a href="https://vhszh.ch/">Volkshochschule</a></h1>
          <p><?php echo  "© " . date("Y/m/d") ." &#129322"?></p>
          </div>
<div class="col-sm pt-3  order-first order-md-last">
      <a class="btn btnColor" href='questions.php'><i class="fa-solid fa-circle-chevron-left fa-3x"></i><p class="btnFont">BACK</p></a>
      <button type="button" class="btn btn-lg" role="button" onclick="deleteAllCookies()"><i class="fa-solid fa-circle-play fa-4x"><p class="btnFont py-1">Restart Quiz</p></i></button>
    </div>
      <div class="col-sm">
          <!-- Include search bar -->
          <button id="toggleBtn" class="btn btnColor m-3 p-2" onclick="helpNeededQuestionmark()"><i class="fa-regular fa-circle-question fa-2x"><p class="btnFont py-1">Need Some Help?</p></i></button>  <!-- onclick="helpNeededQuestionmark()" -->
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
