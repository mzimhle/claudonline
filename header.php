<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php echo $title; ?></title>
<meta name="keywords" content="<?php echo $keywords; ?>" />
<meta name="description" content="<?php echo $description; ?>" />
<link rel="stylesheet" href="/css/normalize.css" />
<link rel="stylesheet" href="/css/foundation.css" />
<link rel="stylesheet" href="/css/main.css" />
<link rel="stylesheet" href="/css/component.css" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
<script src="/js/vendor/modernizr.js"></script>
<?php if($_SERVER['PHP_SELF'] == '/portfolio.php'){ ?>
<link rel="stylesheet" href="/css/popup.css" />
<?php } ?>
</head>
<body>
<?php if($_SERVER['PHP_SELF'] == '/index.php' || $_SERVER['PHP_SELF'] == '/'){ ?>
<section class="section" id="section0">
	<div class="topbar">
    	<div class="row wrap">
            <div class="small-6 large-6 columns logobox"><a href="/index.php"><img src="/img/logo_big.png" alt="Willow Nettica" /></a></div>
            <nav class="small-6 large-6 columns topnav cl-effect-5">
                <ul class="inline-list linkside right">
                    <li><a data-menuanchor="home" href="/index.php" class="homebtn"><span data-hover="Home">Home</span></a></li>
                    <li><a href="/services.php" class="servbtn"><span data-hover="Services">Services</span></a></li>
                    <li><a href="/portfolio.php" class="portbtn"><span data-hover="Portfolio">Portfolio</span></a></li>
                    <li><a href="/contacts.php" class="contbtn"><span data-hover="Contacts">Contacts</span></a></li>
                </ul>
            </nav>
        </div>
	</div>
	<div class="row introbox wrap">
    <div class="row introtxt">
        <div class="small-12 end columns">
            <h1>Do you need inspiring branding or a creative web solution that will help your business reach its peak? <span>Well, we got you covered.</span></h1>
        </div>
	</div>
    <div class="hexbox">
        <div class="small-4 columns left"><img src="/img/web_intro_img.png" alt="Web/Mobile Design &amp; Development" class="left" /></div>
        <div class="small-4 columns"><img src="/img/id_intro_img.png" alt="Corporate Identity" /></div>
        <div class="small-4 columns"><img src="/img/email_intro_img.png" alt="Bulk Email &amp; SMS" class="right" /></div>
    </div>
    <div class="botlink"><div class="arrowbtn"><a data-menuanchor="home" href="#home" class="down"></a></div></div>
    </div>
    <div class="footbar">&nbsp;</div>
</section>
<?php } ?>
