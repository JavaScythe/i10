<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <link href="/assets/main.css" rel="stylesheet" />
  <?php echo injectHeader(); ?>
  <iframe style="width:50%;height:75vh;border:0px;float:right;" id="height_change" src="/iframedocs/gameslist.html"></iframe>
  <iframe style="overflow:hidden;width:50%;height:75vh;border:0px;float:right;" id="height_change2" src="/iframedocs/chatlist.html"></iframe>
  <button  class="button1" style="float:right;" onclick="document.getElementById('height_change').src='/iframedocs/gameslist.html'">Back to games list</button>
  <button  class="button1" style="float:left;" onclick="document.getElementById('height_change2').src='/iframedocs/chatlist.html'">Back to chat list</button>
  </body>
</html>