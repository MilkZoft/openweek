<?php 
	if(!defined("_access")) {
		die("Error: You don't have permission to access here..."); 
	}
	
	if(isMobile()) {
		include "mobile/header.php";
	} else {
		$home  = _webBase . _sh . _webLang;
		$path  = whichLanguage() === "English" ? _webBase . _sh . "es" . _sh . segment(0, isLang()) : _webBase . _sh . "en" . _sh . segment(0, isLang());
		$link  = whichLanguage() === "English" ? getLanguage("Spanish", TRUE) : getLanguage("English", TRUE);
		
		if(SESSION("ZanUser")) {
			$login = '<a href="'. path("users/logout") .'"'. currentPath("users/logout") .'>'. __(_("Logout")) .'</a>';
		} else {
			$login = '<a href="'. path("users/login") .'"'. currentPath("users/login") .'>'. __(_("Log in")) .'</a>';
		} 
?>
<!DOCTYPE html>
<html lang="<?php print _webLang; ?>">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php print $this->getTitle(); ?></title>
		
		<link href="<?php print _webURL . _sh . _www . "/lib/css/frameworks/bootstrap/bootstrap.css"; ?>" rel="stylesheet">
		<link href="<?php print $this->themePath; ?>/css/style.css" rel="stylesheet">
		
		<?php 
			$this->CSS("default"); 
			$this->CSS("www/lib/scripts/js/pretty-photo/css/prettyPhoto.css");
			print $this->getCSS(); 
			print $this->js("www/lib/scripts/js/jquery.js", NULL, NULL, TRUE);
			print $this->js("www/lib/scripts/js/pretty-photo/js/jquery.prettyPhoto.js", NULL, NULL, TRUE);
		?>
		
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$("a[rel^='prettyPhoto']").prettyPhoto();
			});
		</script>
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
			                	<li><a href="<?php print $home; ?>"<?php print currentPath(); ?>><?php print __(_("About me")); ?></a></li>
			     	            <li><a href="<?php print path("works"); ?>"<?php print currentPath("works"); ?>><?php print __(_("My Work")); ?></a></li>
			                    <li><a href="<?php print path("feedback"); ?>"<?php print currentPath("feedback"); ?>><?php print __(_("Contact me")); ?></a></li>
			                    <li><?php print $login; ?></li>
			                    <li><a href="<?php print $path; ?>"><?php print $link ?></a></li>
			                </ul>
			            </nav>
     				</div>
     			</div>
     		</header>
<?php } ?>