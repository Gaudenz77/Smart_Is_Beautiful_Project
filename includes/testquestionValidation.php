<?php
  /*   if(isset($_POST["submit"])){
    // get the answer from the form
    $answer = $_POST["question1"]; //assuming you haven't change the name of the radio button
  
    // create a variable with the correct answer
    $correctAnswer = "A. Chemical rockets";
  
    // check if the answer matches the correct answer
    if($answer == $correctAnswer){
        echo "The answer is correct";
    }else{
        echo "The answer is incorrect";
    }
    } */
?>



<?php
if (isset($_POST['question1'])) {
    $correct_answer = "A. Chemical Rockets";
 
    $answer = $_POST['question1'];
    if ( $answer == $correct_answer) {
        
        echo "<h3>Dear Smartypants, Your Answer Is Correct</h3>";
    } else{
        echo "<h3>Dear Smartypants, Your Answer Is Incorrect.</h3>";
    }
   
}
?>
