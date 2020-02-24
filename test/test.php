<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/2/24
 * Time: 12:55
 */
require(dirname(__DIR__) . '/../../../vendor/autoload.php');

$searchFile = new \Tangshaoxiang\Test\SearchFile();

var_dump($searchFile->searchAllFile("/usr/local/var/www/easyswoole/swoole/composer/"));