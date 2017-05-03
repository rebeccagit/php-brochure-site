<?php 
header("x-xss-protection: 1; mode=block");
header("x-frame-options: SAMEORIGIN");
header("x-content-type-options: nosniff");
header("x-content-type: nosniff");
header("x-powered-by: none");
/*remaining is buggy for now - header("Content-Security-Policy: default-src 'self';  script-src 'self' http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js http://code.jquery.com www.google-analytics.com http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js www.aceprogrammers.com; connect-src 'self'; img-src 'self' aceprogrammers.com; style-src 'unsafe-inline' www.aceprogrammers.com; media-src youtube.com; object-src 'self'");*/
?>