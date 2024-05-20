var $ = jQuery;
const captcha = document.querySelector(".captcha"),
  reloadBtn = document.querySelector(".reload-btn"),
  inputField = document.querySelector(".input-area input"),
  checkBtn = document.querySelector(".check-btn"),
  submitBtn = document.querySelector(".btn-submit"),
  statusTxt = document.querySelector(".status-text");
console.log("statusTxt", statusTxt);
let allCharacters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
  'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd',
  'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's',
  't', 'u', 'v', 'w', 'x', 'y', 'z', 0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
function getCaptcha() {
  for (let i = 0; i < 6; i++) {
    let randomCharacter = allCharacters[Math.floor(Math.random() * allCharacters.length)];
    captcha.innerText += ` ${randomCharacter}`;
    console.log("randomCharacter==>1", randomCharacter);
  }
}
getCaptcha();
reloadBtn.addEventListener("click", () => {
  captcha.innerText = "";
  console.log("captcha.innerText==>", captcha.innerText)
  getCaptcha();
});

checkBtn.addEventListener("click", () => {
  statusTxt.style.display = "block";
  var value1 = $("#captchaInput").val()
  txt2 = captcha.innerText.replace(/\s/g, "");
  if (value1 == txt2) {
    statusTxt.style.color = "#4db2ec";
    statusTxt.innerText = "Nice! You don't appear to be a robot.";
    return
  } else {
    statusTxt.style.color = "#ff0000";
    statusTxt.innerText = "Captcha not matched. Please try again!";
  }
});

$(document).ready(function () {
  $('.btn-submit').click(function () {

    console.log("click==btn");
    var name = $("#name").val()
    var email = $("#email").val()
    var phone = $("#phone").val()
    var msg = $("#message").val()
    var value1 = $("#captchaInput").val()
    txt2 = captcha.innerText.replace(/\s/g, "");

    if (value1 == txt2 && name && email && phone && msg && txt2) {
      // alert('Thanks for contacting us. We will contact you ASAP!');
      $("#contactformgroup").submit();
    } else {
      // alert('Message was not sent.')
    }
  });
});