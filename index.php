<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Define the content type of the response
header('Content-type: text/html');

// Define the expiration date of the content
// In this example, we set it to one hour from now
$expires = gmdate('D, d M Y H:i:s', time() + 3600) . ' GMT';
header('Expires: ' . $expires);

// Define the last modified date of the content
// In this example, we use the filemtime function to get the modification time of the current file
$last_modifined = gmdate('D, d M Y H:i:s', filemtime(__FILE__)) . 'GMT';
header('Last-Modifined: ' . $last_modifined);

// Define the cache control directives
// In this example, we use public to indicate that the content can be cached by any cache
// We also use max-age to specify the maximum time in seconds that the content can be cached
header('Cache control: public, max-age=3600');

// Your normal PHP code goes here
echo '<h1>Hello, world!';
echo '<p>This is a demo of browser caching in PHP.</p>';
?>
