<?php
  $score = 0.0;
  $attempted = 5;
  $ansKey = array("regular", "blue", "4", "topeka", "eight");
  $ansInput = array();
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
 ?>
