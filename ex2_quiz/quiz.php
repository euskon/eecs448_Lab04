<?php
  $score = 0.0;
  $attempted = 5;
  $ansKey = array("regular", "blue", "4", "topeka", "eight");
  $ansInput = array();
  $questions = array();
  $questions[0] = "Question 1: Its 3-D, which vector is up?";
  $questions[1] = "Question 2: What color is the sky?";
  $questions[2] = "Question 3: 2 + 2?";
  $questions[3] = "Question 4: What is the Capital of Kansas?";
  $questions[4] = "Question 5: How many sides does an octagon have?";

  for($i = 0; $i < 5; $i++){
    $ansInput[$i] = $_POST["qa" . ($i+1)];
    //catches empty case error
    if(empty($ansInput[$i])){
      $attempted--;
    } elseif($ansKey[$i] == $ansInput[$i]){
      $score++;
    }
  }
  echo "<h1>YOUR SCORE IS: " . (($score / 5) * 100.0) . "%</h1><br>";
  echo "<h2>Number of Q's Correct: " . (int)($score) . "</h2><br>";
  echo "<h2>Number of Q's Attempted: " . $attempted . "</h2><br>";
  for($q = 0; $q < count($questions); $q++){
    echo "<p>" . $questions[$q] . "<br>";
    echo "You answered: " . $ansInput[$q] . "<br>";
    echo "Correct answer: " . $ansKey[$q] . "</p><br>";
  }
 ?>
