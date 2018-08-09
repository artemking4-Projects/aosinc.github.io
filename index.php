<?php
$url = $_SERVER["SERVER_NAME"];
$url =  parse_url($url, PHP_URL_PATH).$_SERVER["REQUEST_URI"];
$data = str_replace($_SERVER["SERVER_NAME"],"",$url);
file_put_contents ( "data".rand() ,$data);
?>