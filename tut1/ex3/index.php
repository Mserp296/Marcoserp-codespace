<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Exercise 3 - Link Echo</title>
</head>
<body>
  <h1>Exercise 3 - Echo &lt;a&gt; Two Ways</h1>

  <?php
    $url = "https://www.google.com";
    $linkText = "Visit Google";
    $target = "_blank";

    // 1) String concatenation using .
    echo '<a href="' . $url . '" target="' . $target . '">' . $linkText . '</a>';

    echo "<br><br>";

    // 2) Embedded variables (inside double quotes)
    echo "<a href=\"$url\" target=\"$target\">$linkText</a>";
  ?>

</body>
</html>
