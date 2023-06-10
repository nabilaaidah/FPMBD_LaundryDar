const prevBtns = document.querySelectorAll(".btn-prev");
const nextBtns = document.querySelectorAll(".btn-next");
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".form-step");
const progressSteps = document.querySelectorAll(".progress-step");
const addMoreBtn = document.querySelector(".Addmore");


let formStepsNum = 0;

nextBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    if (formStepsNum < formSteps.length - 1) {
      formStepsNum++;
      updateFormSteps();
      updateProgressbar();
    }
  });
});

prevBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    if (formStepsNum > 0) {
      formStepsNum--;
      updateFormSteps();
      updateProgressbar();
    }
  });
});
let i = 0;
addMoreBtn.addEventListener("click", (e) => {
  e.preventDefault();

  // make a separation line
  const formItems = document.getElementById("FormItems");
  formItems.innerHTML += '<hr width="300px">';
  i++;
  // append the input field as needed
  formItems.innerHTML += '<tr>' +
  '<td>' +
      '<select name="addmore['+i+'][service]" class="service form-control">' +
          '<option value="cuci kering">Cuci kering</option>' +
          '<option value="cuci basah">Cuci basah</option>' +
          '<option value="cuci setrika">Cuci setrika</option>' +
      '</select>' +
  '</td>' +
  '<td><input type="text" name="addmore['+i+'][qty]" placeholder="Enter your Qty" class="form-control" /></td>' +
'</tr>';
});

function updateFormSteps() {
  formSteps.forEach((formStep, idx) => {
    if (idx === formStepsNum) {
      formStep.classList.add("form-step-active");
    } else {
      formStep.classList.remove("form-step-active");
    }
  });
}

function updateProgressbar() {
  progressSteps.forEach((progressStep, idx) => {
    if (idx < formStepsNum + 1) {
      progressStep.classList.add("progress-step-active");
    } else {
      progressStep.classList.remove("progress-step-active");
    }
  });

  const progressActive = document.querySelectorAll(".progress-step-active");

  progress.style.width =
    ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
}