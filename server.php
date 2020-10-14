<?php

$server = new Swoole\server('127.0.0.1',9501);

//监听链接进入事件
$server->on('Connect',function ($server,$fd){
    echo 'Client: Connect.\n';
});

//监听数据接收事件
$server->on('Receive',function ($servce,$fd,$from_id,$data){
   $servce->send($fd,"Server: ".$data);
});

//监听连接关闭事件
$server->on('Close',function ($server,$fd){
   echo "Client: Close.\n";
});

//启动服务器

$server->start();