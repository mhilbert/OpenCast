<?php
/**
 * this script is the entry point for the chat iframe:
 * it checks the connection to the nodejs server and redirectes accordingly
 */
$port = filter_input(INPUT_GET, 'port');
$token = filter_input(INPUT_GET, 'token');
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];

$ch = curl_init($protocol . $host . '/srchat/check_connection');
curl_setopt($ch, CURLOPT_NOBODY, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT,5);
curl_setopt($ch, CURLOPT_PORT, $port);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$output = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if ($httpcode === 200) {
    header('Location: ' . $protocol . $host . ':' . $port . '/srchat/open_chat/' . $token);
} else {
    $this_path = dirname($_SERVER['PHP_SELF']);
    echo str_replace('{IMAGES_PATH}', $this_path . '/templates/images/', file_get_contents(__DIR__ . '/templates/error.html'));
}