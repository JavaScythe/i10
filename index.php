<!DOCTYPE html>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';
?>
<html>
  <head>
  <link href="/assets/main.css" rel="stylesheet" />
  <link href="/assets/gleff.css" rel="stylesheet" />
  <link
      href="https://fonts.googleapis.com/css?family=Oswald"
      rel="stylesheet"
      type="text/css"
    />
  <?php echo injectHeader(); ?>
  <script>
      (async function () {
        var res;
        try{res = await fetch("https://387e5.sse.codesandbox.io/api");
        res = await res.json();
        for (i in res["status"]) {
          document
            .getElementById("stat_wrap")
            .children[i].children[0].setAttribute("class", res["status"][i]);
        }
        document.getElementById("stLoad").remove();
        }catch(e){modal(e, 'passive');};
      })();
  </script>
  <div style="border: 2px solid rgb(0, 162, 255);float:right;width:300px;margin:20px;padding:5px;text-align:center">
      <h1 style="font-size:30px;text-align:center;color:white;margin:0px;font-family:'Major Mono Display',monospace;border-bottom:2.5px solid rgb(0, 162, 255);padding:2px;">server status</h1>
      <div id="stat_wrap" style="font-family: monospace; font-size: 15px;">
      <p style="color: white;">Main Site:<span>&nbsp;⬤</span></p>
      <p style="color: white;">Games:<span>&nbsp;⬤</span></p>
      <p style="color: white;">Chats:<span>&nbsp;⬤</span></p>
      <p style="color: white;">Resources:<span>&nbsp;⬤</span></p>
      <p style="color: white;">MusicList:<span>&nbsp;⬤</span></p>
      <p style="color: white;">Discord Server:<span>&nbsp;⬤</span></p>
      <p style="color: white;">Discord Gift Gen:<span>&nbsp;⬤</span></p>
      <p style="color: white;">Analytics:<span>&nbsp;⬤</span></p>
      <p style="color: white;">Web Proxy:<span>&nbsp;⬤</span></p>
      <p style="color: white;">Firefox Hack:<span>&nbsp;⬤</span></p>
      <p class="statusload" id="stLoad">Fetching...</p>
      <!-- Me: class="off" -->
    </div>
  </div> 
<!-- server status end-->


<div><!-- main overview -->

<blockquote style="float:left;">
<!--Dynamic Content Here-->
<h1 style="font-size:28px;color:rgb(0, 162, 255);text-decoration:underline;font-family:'Major Mono Display'">Bulletin</h1>
<p>Important messages from the developer</p>
<ul style="font-family:arial;font-size:14px;color:white;">
  <li>Try a experimental version of Scratch with interesting addons <strong><a target="_blank" href="https://stretch3.github.io/" style="color:rgb(0, 162, 255);">here.</a></strong></li>
  <li>Newsletter sent!</li>
  <li>Replit.com is unblocked</li>
  <li>Check the chat for news on the blocking of repl.it</li>
  <li>Yeah, I need a better name for this site. Suggest one <strong><a href="https://forms.gle/8tjDemWKyqUUH9uk9" style="color:rgb(0, 162, 255);">here.</a></strong></li>
</ul>
</blockquote>
<div id="dev_small">
<div id="existing">
<div style="width:500px;height:52.66px;border:none;margin-top:50px;margin-bottom:30px;padding:none;margin-left:auto;margin-right:auto;"><h1 id="index_title">underground union</h1></div>
<p style="text-align:center;width:500px;margin-left:auto;margin-right:auto;">A central hub to the underground school gaming community with games, chats, and hacks.</p>
<p class="effect" style="text-align:center;font-size:34px;margin-left:auto;margin-right:auto;">&nbsp;Developed by
  <a target="_blank" href="mailto:slashmod6@gmail.com?subject=hello%20there" class="glitch" data-text="JavaScythe#3827">JavaScythe#3827</a>
  &nbsp;
</p>
</div>
</div>
</div>
  <script>
  var query = {};
  location.search.substr(1).split("&").forEach(function(item) {query[item.split("=")[0]] = item.split("=")[1]});
  if (query['invite'] == 1){
    var element = document.getElementById("dev_small");
    var container = document.createElement("div");
    container.setAttribute("id", "welcome_wrapper");
    
    var i = document.createElement("p");
    var text = document.createTextNode("Welcome to Underground Union.");
    i.setAttribute("id", "welcome_title");
    i.appendChild(text);
    container.appendChild(i);
    
    var i = document.createElement("p");
    var text = document.createTextNode("Pinning and bookmarking \(with no title\) this tab will be invisible.");
    i.setAttribute("id", "welcome_main");
    i.appendChild(text);
    container.appendChild(i);
    
    var i = document.createElement("p");
    var text = document.createTextNode("Check out the games or chat to get started, or unblock a site with the Proxy Server.");
    i.setAttribute("id", "welcome_main");
    i.appendChild(text);
    container.appendChild(i);
    
    var i = document.createElement("p");
    var text = document.createTextNode("\(The site is also called \'UU\'\)");
    i.setAttribute("id", "welcome_main");
    i.appendChild(text);
    container.appendChild(i);
    
    var i = document.createElement("p");
    var text = document.createTextNode("Welcome to the Union, fellow member.");
    i.setAttribute("id", "welcome_foot");
    i.appendChild(text);
    container.appendChild(i);
    
    element.appendChild(container);
    element.insertBefore(container, element.childNodes[0]); 
    var existing = document.getElementById("existing");
    existing.remove();
  };
  </script>
  </body>
</html>
