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
