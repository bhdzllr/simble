<?php

require_once 'blog/autoload.php';
require_once 'blog/config.php';

new blog\system\Dispatcher($config);