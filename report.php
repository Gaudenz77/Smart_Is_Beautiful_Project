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
  $result = ($correct_answers >= $total_questions / 2) ? "Well done!" : "Bad";

  $totalPoints = 0;
  foreach($_SESSION as $name => $value) {

  if (str_contains($name, 'question-')) {
  // if (isset($value["single-choice"])) {
      $points = intval($value["single-choice"]);
      $totalPoints = $totalPoints + $points;  // short $totalPoints += $points;
  }
}
$maxPoints = $_SESSION["quiz"]["questionNum"];
?>

<main class="animate__animated animate__lightSpeedInRight animate__slow">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-8">
      <h1 class="display-2">Smart Is Beautiful ... Are You?</h1>
      <h3>I Say:</h3>
      <h1 class=" "><?php echo $totalPoints; ?></4>
      <h3>Congrats</h3>
      <h4><?php echo $result; ?></4> <br>
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
              $answer = ($_SESSION[$question_key]['single-choice'] == 1) ? $correct : $wrong;
              $choice = $_SESSION[$question_key]['single-choice'];
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
      <div class="col-sm">
        <!-- Include search bar -->
        <h1>Footer</h1>
          <p><?php echo  "© " . date("Y/m/d") ." &#129322"?></p>
          </div>
<div class="col-sm pt-3  order-first order-md-last">
      <a class="btn btnColor" href='questions.php'><i class="fa-solid fa-circle-chevron-left fa-3x"></i><p class="btnFont">BACK</p></a>
      <button type="button" class="btn btn-lg" role="button" onclick="deleteAllCookies()"><i class="fa-solid fa-circle-play fa-4x"><p class="btnFont py-1">Restart Quiz</p></i></button>
    </div>
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
