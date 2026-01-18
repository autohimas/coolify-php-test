<?php
$redis = new Redis();
$redis->connect(
    'redis-main',
    '6379'
);

$redis->set("test_key", "Coolify Redis Works!");
