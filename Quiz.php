<?php
//access the global array called $_POST to get the values from the text fields
$name = $_POST["name"];
$quest = $_POST["quest"];
$color = $_POST["color"];
$capital = $_POST["capital"];
$speed = $_POST["speed"];

$questions = array("What is your name?","What is your Quest?","What is your favorite color?","What is the capital of Assyria?","What is the air-speed velocity of an unladen swallow?");

$user = array($name,$quest,$color,$capital,$speed);

$answers = array("King Arthur","To seek the Holy Grail.","Blue","Aššur","African or European swallow?");

for($x=0;$x<5;x++){
    echo "Question ". $x+1 . ": " . $questions[$x] . "<br>";
    echo "You answered: " . $user[$x] . "<br>";
    echo "Correct answer: " . $answers[$x] . "<br>";
}
?>
