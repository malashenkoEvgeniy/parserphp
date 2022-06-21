<?php
include_once 'classes/Curl.php';
include_once 'functions.php';

$c = Curl::app('https://ru.wikipedia.org/wiki/')
    ->set(CURLOPT_HEADER, 1)
    ->agent('Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36')
    ->referer('google.com')
    ->ssl(0);
$data = $c->request('wiki/Кропивницкий');
debug($data);