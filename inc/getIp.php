<?php

// Used to grap and store users IP iddress 
// to be submitted to database 

$ip = getenv('HTTP_CLIENT_IP')?:
	  getenv('HTTP_X_FORWARDED_FOR')?:
	  getenv('HTTP_X_FORWARDED')?:
	  getenv('HTTP_FORWARDED_FOR')?:
	  getenv('HTTP_FORWARDED')?:
	  getenv('REMOTE_ADDR');

?>