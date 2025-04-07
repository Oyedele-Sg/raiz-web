<?php
function base_url($path = '') {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'];
    $scriptDir = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');

    // For localhost dev, keep subdirectory in path
    $base = $protocol . $host . $scriptDir . '/';

    return $base . ltrim($path, '/');
}
?>

