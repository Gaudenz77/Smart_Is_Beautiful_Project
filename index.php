<?php require "./includes//session_start.php";?>
<?php require "./includes/html_head_tag.php";?>
<body>
<!-- HEAD TAG MIGHT BE INCLUDED DIRECTLY IN EACH PAGE // MUST BE TESTED, POSSIBLE ERRORS //-->
<!-- Everything Works Til Now, Timestamp: Jan 30 08:23 -->
<?php
require "./includes/header.php";
?>
<?php 
require "./includes/db_connect.php"; 
echo "$dbHost $dbname $dbUser $dbPassword";

$query = $dbConnection->query("SELECT * FROM `questions`");
$row = $query->fetch(PDO::FETCH_ASSOC);
?>

<?php
require "./includes/tools.php";
print_r($row);
prettyPrint($row);
?>

<main class="animate__animated animate__lightSpeedInRight animate__slow">
<div class="container">
  <div class="row">
    <div class="col m-4 p-4">
      <h1 class="display-2"><br>Smart Is Beautiful ... Are You?</h1>
      <h3>Dear Smartypants, Chose A Topic:</h3>
      <form action="questions.php" method="post">
      
        <select class="form-control" name="quiz" id="quiz">
          <option value="topic"><?php echo $row['topic'];?></option>
          <!-- <option value="general_history">General History</option> -->
        </select>
      
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
      <!-- <a class="btn btnColor" href='index.php'><i class="fa-solid fa-circle-chevron-left fa-3x"></i><p class="btnFont">BACK</p></a> -->
      <button type="submit" class="btn btn-primary btn-lg"  role="button">Start Quiz</a>
      </div>
    </div>
  </div>  
</div>

</form>

<script src="/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
