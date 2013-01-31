<?php

?>
<html>
<head>
  <title>Budge</title>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body bgcolor="#cccccc">
  <div id="container">
    <form action="write.php" method="post">
    <div id="credit">
      <table>
        <th>Credit</th><th>Amount</th>
      <?php
      for ($c=0; $c<6; $c++)
      {
        echo '<tr>';
        echo '<td><input class="shade" type="text" size="60" name="credit'.$c.'"></td>';
        echo '<td><input class="shade" type="text size="10" name="credamt'.$c.'"></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td colspan="2">&nbsp;</td>';
        echo '</tr>';
      }
      echo '<input type="hidden" name="cnum" value="' . $c . '">';
      ?>
    </table>
    </div>
    <p />
    <p />
    <div id="expense">
      <table>
        <th>Expense</th><th>Amount</th>
      <?php
      for ($x=0; $x<11; $x++)
      {
        echo '<tr>';
        echo '<td><input class="shade" type="text" size="60" name="expense'.$x.'"></td>';
        echo '<td><input class="shade" type="text size="10" name="expamt'.$x.'"></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td colspan="2">&nbsp;</td>';
        echo '</tr>';
      }
      echo '<input type="hidden" name="enum" value="' . $x . '">';
      ?>
    </table>
      
    </div>
    <p />
    <div id="submit">
      <input type="submit" value="submit">
    </div>
    </form>
  </div>
</body>
</html>