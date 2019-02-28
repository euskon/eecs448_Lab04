<?php
  echo "<table>";
  //run through each row building one row at a time
  for($i = 0; $i <= 100; $i++){
    echo "<tr>";
    /*run along the currently fixed row, 'i',
      at each column index 'j'
    */
    for($j = 0; $j <= 100; $j++){
      /*Check if the current (i, j) position
        is to be printed as blank space for
        the (0,0) case so our labels align
        correctly. Then check for row '0'
        and column '0' as those should be
        labels. Else put result of i * j in
        table at row i, column j
      */
      if($i == 0 && $j == 0){
        echo "<td>&nbsp;</td>";
      } elseif($i == 0 && $j > 0){
        echo "<th>$j</th>";
      } elseif($j == 0 && $i > 0){
        echo "<th>$i</th>";
      } else{
        echo "<td>" . $i * $j . "</td>";
      }
    }
    echo "</tr>";
  }
?>
