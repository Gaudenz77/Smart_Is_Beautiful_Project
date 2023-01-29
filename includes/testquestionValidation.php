<?php
if (isset($_POST['question1'])) {
    $correct_answer = "A. Chemical Rockets";
 
    $answer = $_POST['question1'];
    if ( $answer == $correct_answer) {
        
        echo "<h3 style='color: green;'>Dear Smartypants, Your Answer Is Correct! <i class='fa-solid fa-face-laugh-wink'></i></h3>";
    } else{
        echo "<h3 style='color: red;'>Dear Smartypants, Your Answer Is Incorrect... <i class='fa-solid fa-poo'></i></h3>";
    }
   
}
?>
