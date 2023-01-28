<?php
    if(isset($_POST["submit"])){
    // get the answer from the form
    $answer = $_POST["question1"]; //assuming you haven't change the name of the radio button
  
    // create a variable with the correct answer
    $correctAnswer = "France";
  
    // check if the answer matches the correct answer
    if($answer == $correctAnswer){
        echo "The answer is correct";
    }else{
        echo "The answer is incorrect";
    }
    }
?>