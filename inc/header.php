<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="<?php echo $descro; ?>">
	<meta name="keywords" content="H2Ocoin, H2O, charity coin, ">
	<meta name="author" content="H2Ocoin">
	<meta name="viewport" content="width=device-width"> 
	<title><?php echo $title; ?></title>
	<link rel="icon" href="img/favicon.png"  type="image/x-icon" />
	<link rel="stylesheet" href="css/h2o.css" type="text/css" />
	<link rel="stylesheet" href="css/print.css" type="text/css" media="print" />
	<script src="js/h2o.js"></script>
</head>
<body>
	<header id="top" class="scroll">
		<div class="social">
		 <ul>
			<li><a href="http://h2ofaucet.com/" class="icon h2o" title="Faucet !"></a></li>
			<li><a href="https://kiwiirc.com/client/irc.freenode.net/#H2OCoin" class="icon irc" title="IRC ! #h2ocoin on Freenode"></a></li>
			<li><a href="https://bitcointalk.org/index.php?topic=640441.0" class="icon bitcoin" title="BitcoinTalk !"></a></li>
			<li><a href="http://www.reddit.com/r/H2Ocoin/" class="icon reddit" title="Reddit !"></a></li>
			<li><a href="https://www.facebook.com/H2Ocoin" class="icon facebook" title="Facebook !"></a></li>
			<li><a href="http://twitter.com/h2ocoin" class="icon twitter" title="Twitter !"></a></li>
		</ul>
	  </div>
		<nav id="main">
			<ul>
				<li<?php if ($menu == 'menu_1') {echo ' class="selected"';} else {echo '';} ?>><a href="index.php" title="home"><span data-hover="home">home</span></a></li><!--
				--><li<?php if ($menu == 'menu_2') {echo ' class="selected"';} else {echo '';} ?>><a href="donations.php" title="donations"><span data-hover="donations">donations</span></a></li><!--
				--><li<?php if ($menu == 'menu_3') {echo ' class="selected"';} else {echo '';} ?>><a href="charities.php" title="charities"><span data-hover="charities">charities</span></a></li><!--
				--><li<?php if ($menu == 'menu_4') {echo ' class="selected"';} else {echo '';} ?>><a href="specs.php" title="specs"><span data-hover="specs">specs</span></a></li>
			</ul>
		</nav>
	</header>