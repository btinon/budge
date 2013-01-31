<?php

?>
<html>
<head>
  <title>Budge</title>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
  <div id="container">
    <div id="expense">
      <form action="write.php" method="post">
        <?php
        for ($x=0; $x<15; $x++)
        {
          echo '<input type="text" size="60" name="expense'.$x.'">\t\t';
          echo '<input type="text size="10" name="amount'.$x.'"><br />';
        }

        
        ?>
      </form>
    </div>
    <div id="credit">
    </div>
  </div>
</body>
</html>