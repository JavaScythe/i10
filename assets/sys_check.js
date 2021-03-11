var os_name = "not_known";
if (navigator.appVersion.indexOf("Win") != -1) os_name =
  "win";
if (os_name == "win") {
  document.getElementById("height_change").style.height = "800px";
  document.getElementById("height_change2").style.height = "800px";
}
if (os_name == "not_known") {
  document.getElementById("height_change").style.height = "600px";
  document.getElementById("height_change2").style.height = "600px";
}
