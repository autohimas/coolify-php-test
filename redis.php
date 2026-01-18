<?php
 
$redis = new Redis();
$redis->connect(
    '10.0.1.4',
    '6379'
);
 
$pass = 'wJwoa635BhCV7QkMei3vnf7z4xH6WbxYdbDZY2ja7jU1FeeXIoJ6Lx4UxvHXrXIW';
 $redis->connect('10.0.1.4','6379', 2.5);

// Auth (Password only)
if (!empty($pass)) {
    if (!$redis->auth($pass)) {
        die('Redis authentication failed');
    }
}

// Test
$redis->set('coolify_test', 'Redis Works!');
echo $redis->get('coolify_test');
