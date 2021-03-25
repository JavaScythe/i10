let isMobile = window.matchMedia("only screen and (max-width: 760px)").matches;
if (isMobile) {
  window.location.href = "http://m.i10.surge.sh/";
} else {
  console.log("Detected as bigger screen e.g. PC monitor");
}
//https
if (location.protocol !== "https:") {
  location.protocol = "https:";
}
var style = document.createElement("LINK");
style.setAttribute(
  "href",
  "/assets/alert.css"
);
style.setAttribute("rel", "stylesheet");
document.head.appendChild(style);
function randomNumber(min, max) {
  var r = Math.random() * (max - min) + min;
  return Math.floor(r);
}
function modal(msg, type) {
  var modaldiv = document.createElement("DIV");
  var modalclose = document.createElement("BUTTON");
  modalclose.setAttribute("class", "modalclose");
  modalclose.textContent = "X";
  if (type === "passive") {
    modaldiv.setAttribute("class", "modal_pas ");
  } else if (type === "persist") {
    modaldiv.setAttribute("class", "modal_per");
  }
  var modalname = randomNumber(1, 8342);
  modalclose.setAttribute("onclick", "delmodal(" + modalname + ");");
  modaldiv.setAttribute("id", modalname);
  var textcont = document.createElement("P");
  textcont.textContent = msg;
  modaldiv.appendChild(textcont);
  modaldiv.appendChild(modalclose);
  document.body.appendChild(modaldiv);
  if (type === "passive") {
    setTimeout(function () {
      delmodal(modalname);
    }, 5000);
  }
}
function delmodal(id) {
  document.getElementById(id).setAttribute("style", "opacity:0;");
}