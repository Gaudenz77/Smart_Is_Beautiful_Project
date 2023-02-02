<?php require "./includes/data_collector.php";?>
<?php require "./includes/html_head_tag.php";?>
<body>
<?php
require "./includes/header.php";
?>


<?php 
/* echo "$dbHost $dbname $dbUser $dbPassword"; */ // DEV ONLY
// getTopics function in db_connect.php
$topics = getTopics($dbConnection);
?>

<main class="animate__animated animate__lightSpeedInRight animate__slow">
<div class="container">
<div class="row justify-content-center">
  <div class="col-sm-8 m-4 p-4">
  <h1 class="display-2"><b>Smart Is Beautiful</b><br> ... Are You?</h1>
      <h3>Dear Smartypants, Chose A Topic:</h3>
      <form  id="quiz-form" action="questions.php" method="post" onsubmit="return navigate('next');">
        <select class="formOwn form-control my-2 py-3" name="topic" id="topic">
        <?php foreach ($topics as $topic): ?>
          <option value="<?= $topic ?>"><?= $topic ?></option>
          <?php endforeach;?>
        </select>
<!-- Variant without $topics = getTopics($dbConnection); , you have to explicitly write all the selesct options -------------------------------->
<!-- <option value="astronautics">Astronautics</option>
<option value="geography">Geography</option> -->
        
<label style="margin-top:20px;" for="questionNum" class="form-label">Number of Questions</label>
<input style="width:100px;" type="number" class="form-control" id="questionNum" name="questionNum" min="5" max="40" value="10">

<input type="hidden" id="lastQuestionIndex" name="lastQuestionIndex" value="-1">
<input type="hidden" id="indexStep" name="indexStep" value="1">

<p id="validation-warning" class="warning"></p>
    </div>
  </div>
</div>
</main>

<!-- FOOTER START ------------------------------------------------------------------------------------------------------>
<div class="footer">
  <div class="container">
    <div class="row text-center">
      <div class="col-sm py-3">
      <h1><a href="https://vhszh.ch/">Volkshochschule</a></h1>
          <p><?php echo  "© " . date("Y/m/d") ." &#129322 " ?></p>
      </div>
      <div class="col-sm pt-3 order-first order-md-last">
      <button type="submit" class="btn  btn-lg" role="button"><i class="fa-solid fa-circle-play fa-4x"><p class="btnFont py-1">Start Quiz</p></i></button></div>
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
