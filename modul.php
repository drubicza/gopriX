<?php
$ur1 = "http://apkshery.freyst.com/addwalletWeb.php";
$ur2 = "http://apkshery.freyst.com/addwallet.php";

$ua1   = array();
$ua1[] = "Content-Type: application/x-www-form-urlencoded";
$ua1[] = "User-Agent: Dalvik/2.1.0 (Linux; U; Android 6.0; iCherry C230 Build/iCherry_C230)";
$ua1[] = "Content-Length: 35";

$ua2   = array();
$ua2[] = "Content-Type: application/x-www-form-urlencoded";
$ua2[] = "User-Agent: Dalvik/2.1.0 (Linux; U; Android 6.0; iCherry C230 Build/iCherry_C230)";
$ua2[] = "Content-Length: 34";

$pos1 = "deviceID=$ID&points=10";
$pos2 = "deviceID=$ID&points=5";

function web($ur1, $pos1, $ua1, $r, $g, $p, $u, $c, $h)
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $ur1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $ua1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $pos1);

    $on = curl_exec($ch);
    curl_close($ch);
    echo $g."You get an additional".$p." <|".$u."10".$p."|>".$g." points\n";
}

function video($ur2, $ua2, $pos2, $r, $u, $g, $p, $c)
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $ur2);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $ua2);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $pos2);

    $on1 = curl_exec($ch);
    curl_close($ch);
    echo $g."You get an additional".$p." <|".$u."5".$p."|>".$g." points\n";
}
?>
