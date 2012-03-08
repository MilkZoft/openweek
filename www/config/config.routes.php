<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

$routes = array(
	0 => array(
			"pattern"	  => "/^test/",
			"application" => "pages",
			"controller"  => "pages",
			"method"	  => "page",
			"params"	  => array("test")
		),
	1 => array(
			"pattern"	  => "/^prueba/",
			"application" => "pages",
			"controller"  => "pages",
			"method"	  => "page",
			"params"	  => array("prueba", "Spanish")
		),
);