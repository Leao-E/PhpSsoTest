<?php
   $hoursToSeconds = fn($hours) => $hours * 60 * 60;
   $cookie =  setcookie ('test-cookie', 'just a test value', time() + $hoursToSeconds(4));
?>
