<?php
require(__DIR__ . '/../../vendor/autoload.php');
require(__DIR__ . '/../../vendor/yiisoft/yii2/Yii.php');
$config = require(__DIR__ . '/../config/main.php');
$application = new \gromver\platform\frontend\Application($config);
$application->run();
