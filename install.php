<?php

include 'blog/config.php';
include 'blog/system/Database.php';

try {
	$db = new blog\system\Database($config['database']);
} catch (PDOException $e) {
	die($e->getMessage());
}

$posts = 'CREATE TABLE `posts` (
	`id`        INT(14) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`title`     VARCHAR(255) NOT NULL,
	`slug`      VARCHAR(255) NOT NULL,
	`text`      TEXT NOT NULL,
	`author`    VARCHAR(35) NOT NULL,
	`created`   DATETIME NOT NULL,
	`modified`  TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) CHARACTER SET utf8 COLLATE utf8_general_ci';

$comments = 'CREATE TABLE `comments` (
	`id`        INT(14) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`post_id`   INT(14) UNSIGNED NOT NULL,
	`text`      TEXT NOT NULL,
	`author`    VARCHAR(35) NOT NULL,
	`created`   DATETIME NOT NULL
)';

try {
	$db->exec($posts);
	$db->exec($comments);
	
	echo 'Tables successfully created. ';
} catch (PDOException $e) {
	echo $e->getMessage();
}

echo 'Redirecting to homepage...';
header('Refresh: 3; url=index.php');
