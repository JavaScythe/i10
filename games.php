<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <link href="/assets/main.css" rel="stylesheet" />
  <?php echo injectHeader(); ?>
  <iframe style="width:100%;height:75vh;border:0px;" id="change" src="/iframedocs/gameslist.html"></iframe>
<button class="button1" onclick="document.getElementById('change').src='/iframedocs/gameslist.html'">Back to list</button>
  </body>
</html>