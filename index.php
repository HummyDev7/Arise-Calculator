<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Converter</title>
  <script src="main.js" defer></script>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/modernize.css">
  <link rel="stylesheet" href="style/utility.css">
  <link rel="stylesheet" href="style/compo/header.css">
  <link rel="stylesheet" href="style/compo/content.css">
  <link rel="stylesheet" href="style/compo/footer.css">
  <!-- montserrat -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <!-- hind -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
  <main class="container">
    <section class="header__container">
      <h1><span style="font-weight: 600;">ARISE </span>Calculator</h1>
    </section>
    <section class="content__section container__second">
      <div class="form__container">
        <form id="form" method="POST">
          <div class="select-dropdown">
            <select name="dropDown" id="dropDown">
              <option value="none" selected disabled hidden>Select an Option</option>
              <option value="areaOfCircle" style="color:var(--clr-light)">areaOfCircle</option>
              <option value="farenheitToCel" style="color:var(--clr-light)">farenheitToCel</option>
              <option value="areaOfTriangle" style="color:var(--clr-light)">areaOfTriangle</option>
            </select>
          </div>
          <div class="image__container">
            <img src="" alt="" id="formulaImg">
          </div>

          <div class="areaOfCircleConverter form__group field">
              <div class="sub__container">
                <div class="valueOne val">Radius(r)</div>
                <input type="text" name="firstInput" class="form__field">
              </div>
            </div>

          <div class=" mainContainer">
            <div class="farenheitToCelConverter">
              <div class="sub__container">
                <div class="valueOne val">°Farenheit</div>
                <input type="text" name="singleInput" class="form__field">
              </div>
            </div>

            <div class="areaOftriangleConverter">
              <div class="twoInput">
                <div class="valueOne val">Base</div>
                <input type="text" name="first" class="form__field">
                <div class="valueOne val">Height</div>
                <input type="text" name="second" class="form__field">
              </div>
            </div>
          </div>

          <div class="btn__container">
            <button type="submit" name="submit" value="submit" onclick="submitForm()" class="calculate__btn btn">Calculate</button>
            <button type="button " name="clear" value="clear" class="clear__btn btn">Clear</button>
          </div>
        </form>
        <?php
        include 'calculate.php';
        ?>
      </div>

      <div class="calcualtor__info">
        <h2 class="formula__text">Please Select Formula</h2>
        <p>
          Our PHP Converter Calculator is a versatile webbased tool designed to efficiently convert Area of circle, farenheit to celcius and area of triangle. Its intuitive interface allows users to effortlessly perform conversions in real-time, enhancing productivity and convenience.
        </p>
      </div>
    </section>
    <footer class="footer__container section">
      <p>©2024 ARISE Calculator</p>
      <p>Coded For Midterm</p>
    </footer>
  </main>
</body>

</html>