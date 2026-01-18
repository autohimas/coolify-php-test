<?php

$redis = new Redis();

$host = '10.0.1.4';   // أو اسم الـ Redis Resource (أفضل)
$port = 6379;
$pass = 'wJwoa635BhCV7QkMei3vnf7z4xH6WbxYdbDZY2ja7jU1FeeXIoJ6Lx4UxvHXrXIW';

$redis->connect($host, $port, 2.5);

// AUTH (مرة واحدة فقط)
if (!$redis->auth($pass)) {
    die('Redis authentication failed');
}

// Test
$redis->set('coolify_test', 'Redis Works!');
echo $redis->get('coolify_test');
