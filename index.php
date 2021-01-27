<?php


$webhookurl = "url";


$timestamp = date("c", strtotime("now"));

$json_data = json_encode([
    "username" => "username",
    "tts" => false,

"content" => "üst mesaj",

    "embeds" => [
        [
            "title" => "title mesajı;",
            "type" => "rich",
            "description" => "açıklama embed",
            "url" => "https://www.csybot.cf",
            "timestamp" => $timestamp,
            "color" => hexdec( "3366ff" ),
            "footer" => [
                "text" => "©CsY",
                "icon_url" => "https://images.discordapp.net/avatars/729389049881690143/9e698c392183c795708395e51bd4a2a2.png"
            ],
            "author" => [
                "name" => "örnek name author mesajı"
            ]
        ]
    ]
], 


JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );


$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);

$response = curl_exec( $ch );
curl_close( $ch );

?>
