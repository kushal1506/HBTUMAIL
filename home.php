<?php session_set_cookie_params(time()+600,'/','http://www.hbtumail.decoder.co.in/',false,true); session_start(); ?>
<?php include('config.php'); ?>
<?php $a = mysql_query("SELECT * FROM  `mailmembers` WHERE  `rid` LIKE  '".$_SESSION['rid']."'") ; $b = mysql_fetch_array($a); ?>
<?php if(!$b['id']){ header( 'location:index.php' );  exit(); } ?>
<?php if($b['yn']==0){ header( 'location:index.php' );  exit(); } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="A mailing sevice for HBTU Kanpur devloped under coding club, Decoder by Dhawal Agrawal">
<meta property="og:image" content="images/hbtumaillogo.png">
<meta property="og:description" content="A mailing sevice for HBTU Kanpur devloped under coding club, Decoder by Dhawal Agrawal">
<meta property="og:url" content="http://www.hbtumail.decoder.co.in" />
<meta property="og:title" content="HBTU MAIL" />
<link rel="apple-touch-icon" sizes="57x57" href="/image/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/image/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/image/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/image/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/image/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/image/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/image/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/image/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/image/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/image/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/image/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/image/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/image/favicon-16x16.png">
<link rel="manifest" href="/image/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/image/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">



<meta property="og:type" content="article" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />

<title>HBTU MAIL</title>
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato|Raleway" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Questrial|Quicksand:300,400,700|Open+Sans+Condensed:300,300italic,700|Raleway:400,100,200,300,500,600,700,800,900|Merriweather:400,700,900,300italic,400italic,700italic,900italic,300|Indie+Flower&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" href="css/entypo.css" />
	<link rel="stylesheet" type="text/css" href="css/gx-sidemenu-blue.css" />
	
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	

	<script type="text/javascript" src="js/gx.sidemenu.js"></script>

	<script type="text/javascript">
		$(function() {
			$('#gx-sidemenu').gxSideMenu({
				mode: isMobile.any() ? 'normal' : 'normal', // normal | tiny
				interval: 300, // animations' interval
				direction: 'left', // left | right
				openOnHover: false, // true | false
				clickTrigger: true, // true | false
				followURLs: true, // true | false
				trigger: ".gx-menu-open.list", // class or id of trigger element
				startFrom: 60, // start pixel from corner on hover trigger
				startClosed: true, // menu opens on document load
				scrolling: true, // menu scrollable (iScroll plugin needed!)
				urlBase: '/sidemenu/', // document base URL
				backText: 'Prev | Back', // Back button text
				onOpen: function() { }, // Open callback
				onClose: function() { } // Close callback
			});
			

		});
	</script>
	<style type="text/css">
	
        a {
			color: #222;
		}
		.gx-menu-open.list {
			top: 0px;
			height: 20px;
			line-height: 0px;
			right: 0px;
			left: auto;
		}
		.gx-menu-open.share {
			right: 3%;
			left: auto;
			top: 0px;
			height: 40px;
			line-height: 10px;
		}

		.gx-menu-open.mobile {
			line-height: 0.6em;
		}

		#wrapper {
			width: 92%;
			margin: auto;
			position: relative;
		}
		

		
	</style>
    </head>
<body>
<div id="controler">
<div id="head">Harcourt Butler Technical University Kanpur</div>
<div id="middleco"><span class="doClr"></span>
<div id="scroller">
	<div id="wrapper">
	<a href="javascript:" class="gx-menu-open entypo list"></a>
	<a href="javascript:" class="gx-menu-open entypo share" style="display: none !important"></a>

<nav class="sidebars">

	<div id="gx-sidemenu" style="z-index: 9998">
		<div class="gx-sidemenu-inner" id="gx-sidemenu-inner-1">
			<div class="scroll">
				<ul class="gx-menu">
					<li class="home">
						<a href="home.php">
							<span class="icon entypo home"></span>
							<span class="text">Home</span>
						</a>
					</li>
					<li class="news">
						<a href="news.php">
							<span class="icon entypo newspaper"></span>
							<span class="text">News</span>
						</a>
					</li>
					<li class="compose">
						<a href="compose.php">
							<span class="icon entypo pencil"></span>
							<span class="text">Compose</span>
						</a>
					</li>
					<li class="sent">
						<a href="sent.php">
							<span class="icon entypo list"></span>
							<span class="text">Sent</span>
						</a>
					</li>
					
				</ul>
			</div>
		</div>
<?php $a = mysql_query("SELECT * FROM  `mailmembers` WHERE  `rid` LIKE  '".$_SESSION['rid']."'") ; $b = mysql_fetch_array($a); ?>

		<div id="gx-sidemenu-login">
			<div class="divider"></div>
			<h2>
				<span class="icon entypo user"></span>
				<span class="text">Welcome, <?=$b['name']?>!</span>
			</h2>
			<div class="divider"></div>
			<a href="edit.php" class="login-btn">Edit profile</a>
			<div class="divider"></div>
			<a href="logout.php" class="login-btn">Log out...</a>
			<div class="divider"></div>
		</div>
		

	</div>
	</nav>
	</div>


</div><span class="doClr"></span>
<h1>HBTU Mailing Services</h1>
<div id="boxes">
<div class="box"><a href="news.php"><div class="box-h"><h2>News</h2></div><div class="box-c"><img src="images/news-icon-12.png" style="width:70px; margin:0 100px; height:70px;" alt="news" /></br><p>Comprehensive up-to-date news coverage, aggregated from sources all over the College by HBTU News.</p></div><div class="box-l"><h3>Know More</h3></div></a></div>
<div class="box"><a href="compose.php"><div class="box-h"><h2>Compose</h2></div><div class="box-c"><img src="images/Email_bdtbt.png"  style="width:70px; height:70px; margin:0 100px;"alt="mail" /></br><p>Comprehensive up-to-date news coverage, aggregated from sources all over the College by HBTU News.</p></div><div class="box-l"><h3>Write Mail</h3></div></a></div>
<div class="box"><a href="sent.php"><div class="box-h"><h2>Sent</h2></div><div class="box-c"><img src="images/img_525323.png"  style="width:70px; height:70px; margin:0 100px;"alt="sent" /></br><p>Comprehensive up-to-date news coverage, aggregated from sources all over the College by HBTU News.</p></div><div class="box-l"><h3>View Mail</h3></div></a></div>
</div>
</div>
<div id="footer">© 2017 HBTU MAIL - All rights reserved - developed by Dhawal Agrawal</div></div>
</body>
</html>
