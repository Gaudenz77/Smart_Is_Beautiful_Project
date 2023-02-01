<?php require "./includes/data_collector.php";?>
<?php require "./includes/html_head_tag.php";?>
<body>
<!-- HEAD TAG MIGHT BE INCLUDED DIRECTLY IN EACH PAGE // MUST BE TESTED, POSSIBLE ERRORS //-->
<?php
require "./includes/header.php";
?>
<?php 
/* require "./includes/db_connect.php"; */
?>

<?php
/* require "./includes/tools.php";
/* prettyPrint($_SESSION); */
/* prettyPrint($_POST); */
/* echo print_r($_POST); */
?>

<main class="animate__animated animate__lightSpeedInRight animate__slow">
<div class="container">
<div class="row justify-content-center">
    <div class="col-sm-8">
      <h1 class="display-2">Smart Is Beautiful ... Are You?</h1>
      
      <?php require "./includes/testquestionValidation.php";?>
      <h3>Your Answer Is: <?php echo $answer; ?></h3> 
      
    </div>
  </div>
</div>
</main>

<div class="footer">
  <div class="container">
    <div class="row text-center">
      <div class="col-sm">
        <!-- Include search bar -->

<?php require "./includes/serachbar.php";?>


      </div>
      <div class="col-sm">
          <h1>Footer</h1>
          <p><?php echo  "© " . date("Y/m/d") ." &#129322"?></p>
      </div>
      <div class="col-sm pt-3  order-first order-md-last">
      <a class="btn btnColor" href='questions.php'><i class="fa-solid fa-circle-chevron-left fa-3x"></i><p class="btnFont">BACK</p></a>
      <a type="button" class="btn btn-primary btn-lg" role="button" onclick="deleteAllCookies()">Restart Quiz</a>
      </div>
    </div>
  </div>  
</div>


<script src="/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
