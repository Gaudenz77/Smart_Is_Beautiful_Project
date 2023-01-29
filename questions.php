<?php require "./includes//session_start.php";?>
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
/* prettyPrint($_SESSION); */
/*prettyPrint($_POST); */
/*echo print_r($_POST); */
?>
<!-- <script>


function validateForm() {
    var answer = document.getElementById("question1").value;
    if (answer == "") {
        document.getElementById("message").innerHTML = "Please fill in the answer";
        return false;
    }
}
</script> -->

<main class="">
<div class="container">
  <div class="row">
    <div class="col-sm">
      <h1 class="display-2"><b>Quiz:</b><br>Smart Is Beautiful ... Are You?</h1>
      <h3>Dear Smartypants: You Did Chose "Astronautics":</h3>
      <h4 id="message"></h4>
  <!-- Form FIELDS Start--------------------------------------------------------------------------------------- -->    
      <form action="report.php" method="post" onsubmit="return validateForm()"> 
        
            <div class="form-group p-4">
          <label for="question1">What is the primary propulsion method used by most spacecrafts for interplanetary travel?</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question1" id="question1" value="A. Chemical Rockets">
            <label class="form-check-label" for="option1">A. Chemical Rockets</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question1" id="question1" value="B. Nuclear Propulsion">
            <label class="form-check-label" for="option2">B. Nuclear Propulsion</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question1" id="question1" value="C. Solar Sails">
            <label class="form-check-label" for="option3">C. Solar Sails</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question1" id="question1" value="D. Ion Thrusters">
            <label class="form-check-label" for="option4">D. Ion Thrusters</label>
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
      <button type="submit" input type="submit"  class="btn btn-primary btn-lg"  role="button">Next Question</a>
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
