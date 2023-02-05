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
  $result = ($correct_answers >= $total_questions / 2) ? "Well done, Smartypants!<img src='assets/img/smart_beautiful_positive.png' alt='good'>" : "Read A Book Sometimes...<img src='assets/img/smart_beautiful_negative.png' alt='image description'><br>Please Try Need-Some-Help-Button Below Next Time.";

  $totalPoints = 0;
  foreach($_SESSION as $name => $value) {

  if (str_contains($name, 'question-')) {
  // if (isset($value["single-choice"])) {
      $points = intval($value["single-choice"]);
      $totalPoints = $totalPoints + $points;  // short $totalPoints += $points;
  }
}
$maxPoints = $_SESSION["quiz"]["questionNum"];

$questionIds = $_SESSION['quiz']['questionIdSequence'];
$resultTable = get_records_by_ids($dbConnection, "questions", $questionIds);
/* $topics = getTopics($dbConnection); */
$dbConnection = null;

?>

<main class="animate__animated animate__lightSpeedInRight animate__slow">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-8">
      <h1 class="display-2">Smart Is Beautiful ... Are You?</h1>
      <h2>I Say:</h2>
      <h3 class="alert alert_success"><?php echo $result; ?></h3>
      <h4>You scored <?php echo $totalPoints; ?> points...My opinion is... I frankly said above.</4>
      <p>If you choose more than half of the questions correctly, you did good. Otherwise use the <strong>Need Some Help</strong> Button in the Footer.<br>You might actually learn something new there</p>
        <!-- <p>Your topic is <?= $quiz['topic'] ?></p> -->
      <table class="table table-dark table-striped">
          <!-- <thead>
            <tr>
              <th>Id</th>
              <th>Topic</th>
              <th>Question</th>
              <th>Choice</th>
              <th>Answer 1</th>
              <th>Answer 2</th>
              <th>Answer 3</th>
              <th>Answer 4</th>
              <th>Answer 5</th>
              
            </tr>
          </thead>
            <tbody> -->
            <?php
           /*  display_records($resultTable);
            function display_records($records) {

              // roll through record in associative array
              foreach ($records as $row) {
                $id = $row['id'];
                $topic = $row['topic'];
                $question_text = $row['question_text'];
                $correctAnswer = $row['correct'];
                $answer_1 = $row['answer-1'];
                $answer_2 = $row['answer-2'];
                $answer_3 = $row['answer-3'];
                $answer_4 = $row['answer-4'];
                $answer_5 = $row['answer-5'];
                
                // get the data for each record
                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$topic</td>";
                echo "<td>$question_text</td>";
                echo "<td>$correctAnswer</td>";
                echo "<td>$answer_1</td>";
                echo "<td>$answer_2</td>";
                echo "<td>$answer_3</td>";
                echo "<td>$answer_4</td>";
                echo "<td>$answer_5</td>";
                echo "</tr>";
                // ... etc.
              }
           
            } */
            
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
