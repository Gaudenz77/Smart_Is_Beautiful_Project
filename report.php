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
      
        <select class="form-control" name="quiz" id="quiz">
          <option value="1">Astronautics - Space-Travel</option>
          <option value="2">General History</option>
        </select>
      
    </div>
  </div>
</div>
</main>


<?php
require "./includes/footer.php";
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
