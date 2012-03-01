<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

$routes = array(
	0 => array(
			"pattern"	  => "/^about/",
			"application" => "pages",
			"controller"  => "pages",
			"method"	  => "page",
			"params"	  => array("about-me")
		),
	1 => array(
			"pattern"	  => "/^acerca/",
			"application" => "pages",
			"controller"  => "pages",
			"method"	  => "page",
			"params"	  => array("acerca-de-mi", "Spanish")
		),
);