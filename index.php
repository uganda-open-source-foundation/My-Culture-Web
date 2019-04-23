<?php
	declare(strict_types=1);
	error_reporting(E_ALL);

	if(isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] == 'gandappsug.com'){
		header("HTTP/1.1 301 Moved Permanently");
		header('Location: http://www.gandappsug.com' . $_SERVER['REQUEST_URI']);
		exit;
	} else {
		if($_SERVER['REMOTE_ADDR'] == '::1') $_SERVER['REMOTE_ADDR'] = '127.0.0.1';
	}

	include(__dir__ . '/Config.php');
	include(DIR . 'System/Initializer.php');