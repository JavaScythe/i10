let isMobile = window.matchMedia("only screen and (max-width: 760px)").matches;
if (isMobile) {
  window.location.href = "https://12g4e.csb.app/";
} else {
  console.log("Detected as bigger screen e.g. PC monitor");
}
