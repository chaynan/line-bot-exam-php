<?php



require "vendor/autoload.php";

$access_token = 'cjeGRATSP3/jMqU5ohVifDBsGcjAn62aIjXj/pUB7+H35FCGzIvciSnNQG8ZBrcmJDp6/ndxgg1l4w8sirSQfgCPA+lfU2DhSI0nAFCJUlnUvbMbOn2PzqOwwvRrOjSJNaU5DPELAof1xSyr01Tf9QdB04t89/1O/w1cDnyilFU=';

$channelSecret = '0e41498c3832c3a4c532816535d95396';

$pushID = 'Uce5927743da4ab348b5a528dc43546bd';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







