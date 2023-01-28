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
require "./includes/tools.php";
/*prettyPrint($_POST); */
/*echo print_r($_POST); */
?>


<main class="">
<div class="container">
  <div class="row">
    <div class="col-sm">
      <h1 class="display-2"><b>Quiz:</b><br>Smart Is Beautiful ... Are You?</h1>
      <h3>Dear Smartypants: You Did Chose "Astronautics":</h3>
  <!-- Form FIELDS Start--------------------------------------------------------------------------------------- -->    
      <form action="report.php" method="post"> 
        
            <div class="form-group p-4">
          <label for="question1">What is the primary propulsion method used by most spacecrafts for interplanetary travel?</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question1" id="option1" value="A. Chemical rockets">
            <label class="form-check-label" for="option1">A. Chemical rockets</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question1" id="option2" value="B. Nuclear propulsion">
            <label class="form-check-label" for="option2">B. Nuclear propulsion</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question1" id="option3" value="C. Solar sails">
            <label class="form-check-label" for="option3">C. Solar sails</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question1" id="option4" value="D. Ion thrusters">
            <label class="form-check-label" for="option4">D. Ion thrusters</label>
          </div>
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
          <p>DumDeeDummDeeDai</p>
      </div>
      <div class="col-sm pt-3  order-first order-md-last">
      <a class="btn btnColor" href='index.php'><i class="fa-solid fa-circle-chevron-left fa-3x"></i><p class="btnFont">BACK</p></a>
      <button type="submit" class="btn btn-primary btn-lg"  role="button">Next Question</a>
      </div>
    </div>
  </div>  
</div>










<?php
/* require "./includes/footer.php"; */
?>
</form>
  <!-- Form  End--------------------------------------------------------------------------------------- -->    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
