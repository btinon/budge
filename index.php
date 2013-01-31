<?php

?>
<html>
<head>
  <title>Budge</title>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
  <div id="container">
    <h2>    Credit                       Amount</h2>
    <form action="write.php" method="post">
    <div id="credit">
      <?php
      for ($c=0; $c<6; $c++)
      {
        echo '<input type="text" size="60" name="credit'.$c.'">\t\t';
        echo '<input type="text size="10" name="credamt'.$c.'"><br /><br />';
      }
      ?>
    </div>
    <div id="expense">
      
        <?php
        for ($x=0; $x<12; $x++)
        {
          echo '<input type="text" size="60" name="expense' . $x . '">' . "\t\t";
          echo '<input type="text size="10" name="expamt'.$x.'"><br /><br />';
        }
        ?>

      
    </div>
    </form>
  </div>
</body>
</html>