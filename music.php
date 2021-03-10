<!DOCTYPE html>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';
?>
<html>
  <head>
  <link href="/assets/song.css" rel="stylesheet" />
  <?php echo injectHeader(); ?>
  <h1>Music</h1>
  <p>MusicList has what you need. Literally any song on youtube or spotify</p>
  <a href="https://musiclist.i10.repl.co/" style="font-family:arial;margin:10px;color:rgb(0,153,255);">MusicList</a>
  <iframe style="width:100%;height:75vh;border:0px;" id="change" src="https://musiclist.i10.repl.co/"></iframe>
  </body>
</html>