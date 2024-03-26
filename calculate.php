<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    .res {
      color: white;
      display: flex;
      gap: 2rem;
      margin-bottom: 2rem;
      margin-top: 2rem;
      justify-content: center;
    }

    .resText {
      font-size: 1.2rem;
    }
  </style>
</head>

<body>
  <?php

  if (isset($_POST['submit'])) {
    $areaCircleInput = $_POST['firstInput'];

    $farenheitConverter = $_POST['singleInput'];
    $base = $_POST['first'];
    $height = $_POST['second'];
    $selectedFormula = $_POST['dropDown'];

    switch ($selectedFormula) {

      case "areaOfCircle":
        echo '<div class="res">'
          . '<p class="resText" >Area = </p>'
          . round(calculateAreaOfCircle($areaCircleInput), 2)
          . '</div>';
        break;

      case "areaOfTriangle":
        echo '<div class="res">'
          . '<p class="resText" >Area = </p>'
          . round(calculateAreaOfTriangle($base, $height), 2)
          . '</div>';
        break;

      case "farenheitToCel":
        echo '<div class="res">'
          . '<p class="resText" >Area = </p>'
          . round(calculateCelcius($farenheitConverter), 2)
          . '</div>';
        break;
    }
  }

  function calculateCelcius($num)
  {
    return ((int) $num - 32) / 1.8;
  }

  function calculateAreaOfTriangle($num1, $num2)
  {
    return 0.5 * $num1 * $num2;
  }

  function calculateAreaOfCircle($radius)
  {
    return M_PI * pow($radius, 2);
  }
  ?>
</body>

</html>