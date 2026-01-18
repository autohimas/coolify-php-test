<?php


$pass = 'wJwoa635BhCV7QkMei3vnf7z4xH6WbxYdbDZY2ja7jU1FeeXIoJ6Lx4UxvHXrXIW';
$user =  'default';
$redis = new Redis();
$redis->connect(
    '10.0.1.4',
    '6379'
);

if ($user && $pass) {
 $redis->auth(['user' => $user, 'pass' => $pass]);
} elseif ($pass) {
 $redis->auth($pass); // fallback لو ما في username
}

$redis->set("test_key", "Coolify Redis Works!");
