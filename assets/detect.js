let isMobile = window.matchMedia("only screen and (max-width: 760px)").matches;
if (isMobile) {
  window.location.href = "http://m.i10.surge.sh/";
} else {
  console.log("Detected as bigger screen e.g. PC monitor");
}