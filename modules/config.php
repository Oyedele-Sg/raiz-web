<?php
// Dynamic base URL
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$scriptDir = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');

// Remove nested directories if live (optional cleanup logic)
if (strpos($host, 'localhost') !== false) {
    $base = $protocol . $host . $scriptDir . '/';
} else {
    $base = $protocol . $host . '/';
}
?>
