// returns server time in ms
<?php
list($usec, $sec) = explode(" ", microtime());
echo round(((float)$usec + (float)$sec)*1000);
?>
