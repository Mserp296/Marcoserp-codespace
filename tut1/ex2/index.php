<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Exercise 2 - Image Echo</title>
</head>
<body>
  <h1>Exercise 2 - Echo &lt;img&gt; Two Ways</h1>

  <?php
    $filename = "happy.jpg";
    $alt = "happy life";
    $classname = "box";
    // markup: <img src='images/happy.jpg' alt='happy life' class='box' />


    echo "<img src='images/" . $filename . "' alt='" . $alt . "' class='" . $classname . "' />";

    echo "<br><br>";

    echo "<img src=\"images/$filename\" alt=\"$alt\" class=\"$classname\" />";
    
 ?>

</body>
</html>
