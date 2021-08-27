<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table {
      border-collapse: collapse;
    }
    table tr {
      border: 1px solid black;
    }
    table td {
      border: 1px solid black;
    }
  </style>
</head>
<body>
  <table>
    <?php
    for($i = 1;$i <= 9;$i++) {
      print "<tr>";
      for($j = 1;$j <= 9;$j++) {
        print "<td>" . ($i * $j) . "</td>";
      }
      print "</tr>";
    }
    ?>
  </table>
</body>
</html>