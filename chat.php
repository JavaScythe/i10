<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <link href="/assets/main.css" rel="stylesheet" />
  <?php echo injectHeader(); ?>
  <p>If you haven't requested access to the chat, you won't be able to join<br>Request access <a href="access.html" id="access_linkto" >here</a></p>
  <iframe id="height_change" src="/iframedocs/chatlist.html" allow="camera;microphone;geolocation" style="width:100%;height:75vh;padding:0;margin:0;border:0px;"></iframe>
  <button  class="button1" style="float:left;" onclick="document.getElementById('height_change').src='/iframedocs/chatlist.html'">Back to chat list</button>
  </body>
</html>