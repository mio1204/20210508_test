<table border="1">
  <?php
  for ($j = 1; $j <= 9; $j++) {
    echo "<tr>";
    for ($i = 1; $i <= 9; $i++) {
      echo "<td style=\"text-align:left;\">";
      if ($i * $j < 10)
        echo " ";
      echo $i * $j . " ";
      echo "</td>";
    }
    // echo "\n";
    echo "</tr>";
  }
  ?>
</table>