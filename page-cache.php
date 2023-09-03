<?php
//Define the cache file name and expiration time
$cache_file = 'cache/page-cache.html';
$cache_time = 60 * 60; // 1 hour

// Check if the cache file exists and is not expired
if (file_exists($cache_file) && time() - filemtime($cache_file) < $cache_time) {
    //Read and output the cache file
    echo file_get_contents($cache_file);
    exit;
}

// Start output buffering
ob_start();

// Your normal PHP code goes here
echo '<h1>Hello, world!</h1>';
echo '<p>This is a demo of page caching in PHP.</p>';
$fp = fopen($cache_file, 'w');
fwrite($fp, ob_get_contents());
fclose($fp);
ob_end_flush();