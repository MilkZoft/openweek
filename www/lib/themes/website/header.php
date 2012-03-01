<?php 
	if(!defined("_access")) {
		die("Error: You don't have permission to access here..."); 
	}
	
	if(isMobile()) {
		include "mobile/header.php";
	} else {
?>
<!DOCTYPE html>
<html lang="<?php print _webLang; ?>">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php print $this->getTitle(); ?></title>
		
		<link href="<?php print _webURL . _sh . _www . "/lib/css/frameworks/bootstrap/bootstrap.css"; ?>" rel="stylesheet">
		<link href="<?php print $this->themePath; ?>/css/style.css" rel="stylesheet">
		<?php print $this->getCSS(); ?>
		
		<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
			<!--[if lt IE 9]>
			  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
		<!-- Le styles -->
	</head>

	<body>
  		<div id="container">
     		<header>
     			<div class="row">
     				<div class="span3 logo">
     					<h1>CodeJobs</h1>
     				</div>

     				<div class="span7 offset2">
     					<nav>
			                <ul>
			                	<li><a href="#" class="current">About me</a></li>
			     	            <li><a href="#">My Work</a></li>
			     	            <li><a href="#">Blog</a></li>
			                    <li><a href="#">Contact me</a></li>
			                </ul>
			            </nav>
     				</div>
     			</div>
     		</header>
<?php } ?>