<?php 
$ip = $_SERVER['REMOTE_ADDR'];

$proxy = $_SERVER['HTTP_CLIENT_IP'];
$REQUEST_TIME_FLOAT = $_SERVER['REQUEST_TIME_FLOAT'];
$HTTP_USER_AGENT = $_SERVER['HTTP_USER_AGENT'];
$SERVER_PROTOCOL = $_SERVER['SERVER_PROTOCOL'];
$REQUEST_TIME = $_SERVER['REQUEST_TIME'];

$token = "6045356789:AAFFiFwZXVurC7xaMUImFWaM76Ae2zbdXYY";
$chat_id = "6283787812";

$arr = array(
    "IP" => $ip,
    "PROXY" => $proxy,
    "USER AGENT" => $HTTP_USER_AGENT
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b>: ".$value."%0A";
}

$fp=fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\style.css">
    <link rel="shortcut icon" href="assets\favicon.ico" type="image/x-icon">
    <title>kurianov.site</title>
</head>
<body>
<div class="profile">
        <img class="avatar" src="https://cdn.discordapp.com/avatars/391347381414920213/6d34174710566777ea3f78eac152d529.webp?size=128" alt="avatar">
        <div class="online"></div>
        <img class="banner" src="https://cdn.discordapp.com/banners/391347381414920213/b7ab8d89e21c69e9d9e978a6844558a5.png?size=480" alt="banner">
       <h2 class="name">vladik<span class="nametag">#0123</span></h2>
       <h4 class="aboutme">about me:</h4>
    <div class="links">
        <a href="https://steamcommunity.com/id/vladikxl/" class="link">my steam - vladikrgb</a>
        <a href="https://dsc.gg/ytro" class="link">my server - sumrachnoe ytro</a>
        <a href="https://dsc.gg/maga" class="link">discord admin - furnex</a>
    </div>
</div>
    <div class="box">
        <span></span>
    </div>
</body>
</html>