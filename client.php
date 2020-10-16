<?php

$client = new Swoole\Client(SWOOLE_SOCK_TCP);

if(!$client->connect('62.234.4.156',9501,-1)){
    echo 'connect failed error'.$client->errCode;
}
$client->send('success');
echo $client->recv();
$client->close();