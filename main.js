let cal = (function () {
  //cache DOM
  let calOne = document.querySelector(".areaOfCircleConverter");
  let calTwo = document.querySelector(".farenheitToCelConverter");
  let calThree = document.querySelector(".areaOftriangleConverter");
  let getDropDown = document.querySelector("#dropDown");
  let container = document.querySelector(".mainContainer");
  let formulaTextContainer = document.querySelector(".formula__text");
  let calculateBtn = document.querySelector(".calculate__btn");
  let imageContainer = document.querySelector(".image__container");
  let formulaImg = document.querySelector("#formulaImg");

  getDropDown.addEventListener("change", checkSelectedFormula);
  calculateBtn.disabled = true;

  function submitForm() {
    var form = document.getElementById("form");
    var formData = new FormData(form);
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          document.getElementById("result").innerHTML = xhr.responseText;
        } else {
          console.error("There was a problem with the request.");
        }
      }
    };
    xhr.open("POST", form.action, true);
    xhr.send(formData);
  }

  function checkSelectedFormula() {
    let value = getDropDown.value;

    helperChecker(
      value,
      calOne,
      "areaOfCircle",
      "Area of Circle",
      "images/areaOfCircle.png"
    );
    helperChecker(
      value,
      calTwo,
      "farenheitToCel",
      "Farenheit to Celcius",
      "images/farenheitToCel.png"
    );
    helperChecker(
      value,
      calThree,
      "areaOfTriangle",
      "Area of Triangle",
      "images/triangleCal.png"
    );
  }

  function helperChecker(
    selectedValue,
    targetEl,
    equalToVal,
    formulaText,
    imagePath
  ) {
    if (selectedValue == equalToVal) {
      targetEl.classList.add("showForm");
      container.classList.add("showForm");
      formulaTextContainer.textContent = formulaText;
      calculateBtn.disabled = false;
      formulaImg.src = imagePath;
    } else {
      targetEl.classList.add("hideForm");
      targetEl.classList.remove("showForm");
    }
  }

  return {};
})();
