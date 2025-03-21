<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Area and Perimeter of Rectangle, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Mr. Coxall" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.purple-deep_orange.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Area and Perimeter of Rectangle,in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Area and Perimeter of Rectangle, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./area_of_trinagle.png" alt="laptop image" width="250" />
      </div>
      <form action="index.php" method="GET">
        <form action="index.php" method="GET">
          <div class="page-content-php">
            <div id="user-info">
              <?php
              $heightOfTriangle = $_GET["height"];
              $baseOfTriangle = $_GET["base"];

              // process
              $area = $heightOfTriangle * $baseOfTriangle / 2;

              // output
              echo "If a Triangle has length = " . $heightOfTriangle . " cm and the width = " . $baseOfTriangle . " cm:";
              echo "<br />";
              echo "<br />";
              echo "The area of the Triangle is " . $area . " cm².";
              echo "<br />";
              ?>
              <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
                Return
              </button>
        </form>
  </div>
  </div>
  </main>
  </div>
</body>

</html>