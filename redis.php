<?php
$redis = new Redis();
$redis->connect(
    '10.0.1.4',
    '6379'
);

$redis->set("test_key", "Coolify Redis Works!");
