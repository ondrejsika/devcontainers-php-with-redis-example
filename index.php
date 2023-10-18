<?php

$redis = new Redis();
$redis->connect('redis', 6379);
$newValue = $redis->incr('counter');
echo $newValue;
