<?php
	// Sb%}tJiE0T}A
	// Directory
	define('DIR', __dir__ . '/');
	define('APP', DIR . 'Catalog/');
	define('CATALOG', DIR . 'Catalog/');
	define('SYS', DIR . 'System/');
	define('TPL', DIR . 'Template/');

	// Time
	define('TIME', time());
	define('TIMESTRING', floor(microtime(true)));
	define('UNIQUE_TOKEN', sha1(TIMESTRING . str_shuffle(TIMESTRING)));

	// Base library
	require(DIR . 'System/BaseFx.php');

	spl_autoload_register(function($class){
	    include_once(SYS . 'Classes/'.$class.'.class.php');
	});

	$Site = new Initializer;
	$Site->title = 'Gandapps - Software, Databases & Networks';
	$Site->domain = 'gandappsug.com';
	$Site->webform_email = 'webform@' . $Site->domain;
	$Site->contact_email = 'info@' . $Site->domain;

	define('ROOTURL', $Site->url);
	define('DOMAIN', $Site->url_domain);

	// Session
	session_name($Site->cookiePrefix);
	session_start();