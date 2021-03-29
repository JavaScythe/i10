<?php
function injectHeader() {
  $tips = ['so many games added', 'development continues', 'now an offical warez site','feared by many', 'sign up for newsletters, they have special content', 'built by JavaScythe'];
  $tip = $tips[array_rand($tips)];
  return '
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RZG4G9H3VN">
	</script>
	<script>
		window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag("js", new Date());
    gtag("config", "G-RZG4G9H3VN");
	</script>
	<script src="/assets/header.js" async></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
  <meta property="og:type" content="website" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:title" content="Under&zwnj;ground Uni&zwnj;on" />
  <meta property="og:description" content="Pr&zwnj;oxy server, ga&zwnj;mes, ch&zwnj;ats, ha&zwnj;cks, all kinds of sc&zwnj;ripts and things unbl&zwnj;ocked in sch&zwnj;ool" />
  <meta property="og:image" content="/assets/ogimg.png" />
  <meta property="og:url" content="https://i10.herokuapp.com/" />
  <meta property="og:site_name" content="Under&zwnj;ground Uni&zwnj;on" />
  <meta name="twitter:title" content="Under&zwnj;ground Uni&zwnj;on">
  <meta name="twitter:description" content="Pr&zwnj;oxy server, ga&zwnj;mes, ch&zwnj;ats, ha&zwnj;cks, all kinds of sc&zwnj;ripts and things unbl&zwnj;ocked in sch&zwnj;ool">
  <meta name="twitter:image" content="/assets/ogimg.png">
  <meta name="description" content="Pr&zwnj;oxy server, ga&zwnj;mes, ch&zwnj;ats, ha&zwnj;cks, all kinds of sc&zwnj;ripts and things unbl&zwnj;ocked in sch&zwnj;ool" >
  <meta name="robots" content= "index, follow">
  <meta
      http-equiv="Content-Security-Policy"
      content="upgrade-insecure-requests"
    />
	<title>&zwnj;</title>
	<link rel="icon" type="image/x-icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAH0lEQVQ4T2NkoBAwUqifYdQAhtEwYBgNA1A+Gvi8AAAmmAARf9qcXAAAAABJRU5ErkJggg=="
	/>
	<link href="/assets/header.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<header>
		<a href="/">
			<h1 class="head_title">Underground Union<span id="spacing">&nbsp;&nbsp;</span><a class="head_desc">'.$tip.'</a></h1>
      </a>
      <nav>
        <ul class="navmenu">
	        <li><a href="/">Home</a></li>
	        <li><a href="/resources.php">Resources</a></li>
	        <li><a href="/games.php">Games</a></li>
	        <li><a href="/chat.php">Chat</a></li>
	        <li><a href="/gamechat.php">Game|Chat</a></li>
          <li><a href="/proxy.php">Proxy</a></li>
          <li><a href="/music.php">Music</a></li>
          <li><a href="/help.php">Cheats</a></li>
          <li><a href="/program.php">Coding</a></li>
          <li><a href="/contact.php">Contact</a></li>
          <li><a href="/terms.php">Disclaimer</a></li>
        </ul>
      </nav>
      <svg id="overlay-img" preserveAspectRatio="none" viewBox="0 0 1071.50537109375 33.79237747192383" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" style="enable-background:new 0 0 1400 980;" width="1071.50537109375px" height="33.79237747192383px"><rect id="ee-background" x="0" y="0" width="1071.50537109375" height="33.79237747192383" style="fill: white; fill-opacity: 0; pointer-events: none;"/>
<path d="M 22.84714126586914 41.89031219482422 L 22.84714126586914 76.73284912109375 L 882.1763916015625 76.73284912109375 L 915.495849609375 45.460906982421875 L 22.84714126586914 41.89031219482422 Z" style="fill: rgb(214, 214, 214); fill-opacity: 1; stroke: rgb(0, 0, 0); stroke-opacity: 1; stroke-width: 0; paint-order: fill;" transform="matrix(1.1959999799728394, 0, 0, 1.1959999799728394, -29.472204208374023, -55.662405014038086)"/></svg>
    </header>
  ';
}
?>
