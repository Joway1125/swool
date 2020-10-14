<?php

$server = new Swoole\Server('0.0.0.0',9501);

//监听链接进入事件
$server->on('Connect',function ($server,$fd){
    echo 'Client: Connect.\n';
});

//监听数据接收事件
$server->on('Receive',function ($server,$fd,$from_id,$data){
    $server->send($fd,"Server: ".$data);
});

//监听连接关闭事件
$server->on('Close',function ($server,$fd){
   echo "Client: Close.\n";
});

//启动服务器d

$server->start();