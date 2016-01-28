<?php

if (file_exists('blog/config.php')) {
	require_once 'blog/autoload.php';
	require_once 'blog/config.php';

	new blog\system\Dispatcher($config);
} else {
	echo 'No config file found.';
}
