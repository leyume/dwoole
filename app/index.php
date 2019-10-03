<?php 
declare(strict_types=1);
require_once 'vendor/autoload.php';

use Siler\Swoole;

$server = function () {
    Swoole\emit('Hello World...');
};

Swoole\http($server)->start();