<?php

error_reporting(E_ALL);
# error_reporting(0);
# $timeStart = microtime(true);

require_once 'blog/bootstrap.php';

# $timeEnd = microtime(true);
# $time = $timeEnd - $timeStart;

?>
<div id="bench">
	<?php # echo $time . ' Sekunden ' . '<br />' . ($time * 1000000) . ' [&micro;s]'; ?>
</div>