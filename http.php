<?php

$serv = new Swoole\Http\Server('0.0.0.0',9502);
$serv->on('request',function($req,$res){
    $res->write('Hello, world!');
    echo "Write 'hello, world to client'\n";
    $res->end();
});

$serv->start();
