<?php

$client = new swoole_client(SWOOLE_SOCK_TCP | SWOOLE_KEEP);

if (!$client->connect('127.0.0.1', 9501, -1))
{
    exit("connect failed. Error: {$client->errCode}\n");
}

$data = [
	'data' => array('name' => rand(100,999)),
	'action' => ''
];

$client->send(json_encode($data));
echo $client->recv();
$client->close();
