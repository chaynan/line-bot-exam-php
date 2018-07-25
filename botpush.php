<?php



require "vendor/autoload.php";

$access_token ='Z/ThPPcSW+1ASK75B3DsrRx9bKlyW8Y+Y8qrtGXee0Ge7W4AXhAo+Ma+xrZ53w6rJDp6/ndxgg1l4w8sirSQfgCPA+lfU2DhSI0nAFCJUlkxDy16aFzm5LV/2YzQrUTZWWbqZ02KEFd0vjhBIQ2NVwdB04t89/1O/w1cDnyilFU=';

$channelSecret ='0e41498c3832c3a4c532816535d95396';

$pushID ='Uce5927743da4ab348b5a528dc43546bd';

$httpClient = new 
\LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => 
$channelSecret]);

$textMessageBuilder = new 
\LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







