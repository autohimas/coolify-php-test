<?php
$redis = new Redis();
$redis->connect(
    getenv('REDIS_HOST'),
    getenv('REDIS_PORT')
);

$redis->set("test_key", "Coolify Redis Works!");
