<?php

require_once __DIR__ . '/../vendor/autoload.php';

$steamRobot = new \Steamrobot\Steamrobot();
$steamRobot->handle();

die('EOF');