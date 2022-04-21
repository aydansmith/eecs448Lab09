<?php
//access the global array called $_POST to get the values from the text fields
$question1 = $_POST["question1"];
echo "Question 1: What is the Capital of Kansas<br>";
echo "You answered: " . $question1 . "<br>";
echo "Correct Answer: Topeka<br><br>";
$question2 = $_POST["question2"];
echo "Question 2: What state do the KC Chiefs play in?<br>";
echo "You answered: " . $question2 . "<br>";
echo "Correct Answer: Missouri<br><br>";
$question3 = $_POST["question3"];
echo "Question 3: What state do the KC Royals play in?<br>";
echo "You answered: " . $question3 . "<br>";
echo "Correct Answer: Missouri<br><br>";
$question4 = $_POST["question4"];
echo "Question 4: What state do the Jayhawks play in?<br>";
echo "You answered: " . $question4 . "<br>";
echo "Correct Answer: Kansas<br><br>";
$question5 = $_POST["question5"];
echo "Question 5: What state do the Cornhuskers play in?<br>";
echo "You answered: " . $question5 . "<br>";
echo "Correct Answer: Nebraska<br><br>";
$count_right = 0;
if($question1 == Topeka){
    $count_right++;
}
if($question2 == Missouri){
    $count_right++;
}
if($question3 == Missouri){
    $count_right++;
}
if($question4 == Kansas){
    $count_right++;
}
if($question5 == Nebraska){
    $count_right++;
}
echo "You got " . $count_right . "/5 correct<br>";
echo "That is a ".($count_right/5*100)."%<br>"; 

?>