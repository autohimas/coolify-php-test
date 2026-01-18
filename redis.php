<?php
$redis = new Redis();
$redis->connect(
    '10.0.1.4',
    '6379'
);

$pass = 'wJwoa635BhCV7QkMei3vnf7z4xH6WbxYdbDZY2ja7jU1FeeXIoJ6Lx4UxvHXrXIW';

$redis = new Redis();
$redis->connect($host, $port);

if ($pass) {
 $redis->auth($pass);
}

$redis->set("test_key", "Coolify Redis Works!");
