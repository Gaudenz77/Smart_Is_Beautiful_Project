<?php require "./includes/html_head_tag.php";?>
<body>
<!-- HEAD TAG MIGHT BE INCLUDED DIRECTLY IN EACH PAGE // MUST BE TESTED, POSSIBLE ERRORS //-->
<?php
require "./includes/header.php";
?>
<?php
require "./includes/tools.php.php";
/*prettyPrint($_POST); */
/*echo print_r($_POST); */
?>


<main class="">
<div class="container">
  <div class="row">
    <div class="col-sm bg-warning">
      <h1 class="display-2"><b>Quiz:</b><br>Smart Is Beautiful ... Are You?</h1>
      <h3>Dear Smartypants: Chose A Topic:</h3>
  <!-- Form FIELDS Start--------------------------------------------------------------------------------------- -->    
      <form action="" method="post">  
            <div class="form-group">
          <label for="question1">What is the primary propulsion method used by most spacecrafts for interplanetary travel?</label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="question1" id="option1" value="France">
            <label class="form-check-label" for="option1">A. Chemical rockets</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="question1" id="option2" value="Italy">
            <label class="form-check-label" for="option2">B. Nuclear propulsion</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="question1" id="option3" value="Germany">
            <label class="form-check-label" for="option3">C. Solar sails</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="question1" id="option4" value="Spain">
            <label class="form-check-label" for="option4">D. Ion thrusters</label>
          </div>
   <!-- Form FIELDS End--------------------------------------------------------------------------------------- -->    
     
    </div>
  </div>
</div>
</main>


<?php
require "./includes/footer.php";
?>
</form>
  <!-- Form  End--------------------------------------------------------------------------------------- -->    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
