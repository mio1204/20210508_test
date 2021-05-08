<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>

  <style>
    table {
      border-collapse: collapse;
      border: 1px solid black;
    }

    th,
    td {
      border: 1px solid black;
    }

    td {
      text-align: left;
    }
  </style>

<body>

  <table>
    <?php
    echo "<tr>";
    for ($j = 1; $j <= 9; $j++) {
      for ($i = 1; $i <= 9; $i++) {
        if ($i * $j < 10)
          echo " ";
        echo $i * $j . " ";
      }
      echo "\n";
    }
    ?>
  </table>
</body>