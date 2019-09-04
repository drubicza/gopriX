<?php
$u = "\e[1;35m";
$c = "\e[1;36m";
$g = "\e[1;32m";
$r = "\e[1;31m";
$p = "\e[1;37m";
$b = "\e[1;34m";
$h = "\e[1;30m";

include ('config.php');
include ('modul.php');

$url1 = "http://apkshery.freyst.com/isUserPresent.php";
$url2 = "http://apkshery.freyst.com/alldata.php";
$url3 = "http://apkshery.freyst.com/displaybalance.php";

$h1   = array();
$h1[] = "Content-Type: application/x-www-form-urlencoded";
$h1[] = "User-Agent: Dalvik/2.1.0 (Linux; U; Android 6.0; iCherry C230 Build/iCherry_C230)";
$h1[] = "Content-Length: 25";

$h2   = array();
$h2[] = "Content-Type: application/x-www-form-urlencoded";
$h2[] = "User-Agent: Dalvik/2.1.0 (Linux; U; Android 6.0; iCherry C230 Build/iCherry_C230)";
$h2[] = "Content-Length: 23";

$h3   = array();
$h3[] = "Content-Type: application/x-www-form-urlencoded";
$h3[] = "User-Agent: Dalvik/2.1.0 (Linux; U; Android 6.0; iCherry C230 Build/iCherry_C230)";
$h3[] = "Content-Length: 23";

$data1 = "DeviceId=$ID";
$data2 = "device=$ID";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $h1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
$respon = curl_exec($ch);
curl_close($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url2);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $h2);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
$respon = curl_exec($ch);
curl_close($ch);
$t1 = json_decode($respon, true);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url3);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $h3);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
$res = curl_exec($ch);
curl_close($ch);
$t2 = json_decode($res, true);

echo $g,$banner;
sleep(1);
echo $c."\n[".$p."================".$c."[".$u." WELCOME ".$c."]".$p."================".$c."]\n";
echo "[".$p."•".$c."]> ".$g."Creator    : Mr.".$b."Tricks  ".$g."||".$p." Sript Nuyul \n";
echo $c."[".$p."•".$c."]> ".$g."My Channel : ".$p."Mr.Minimax".$g." || ".$r."Goprix        \n";
echo $c."[".$p."================".$c."[".$u."  SCRIPT ".$c."]".$p."================".$c."]\n\n";
sleep(2);
echo $g."Mulai ".$c;

if ($t1["result"][0]["Email"] == true) {
    echo "•";
    sleep(1);
    echo "•";
    sleep(1);
    echo "•";
    sleep(1);
    echo $r."!";
    sleep(1);
    echo $g."\nData True\n\n";
    sleep(1);
    echo $g."NickName :".$c." ".$t1["result"][0]["Username"]."\n";
    echo $g."Ballance :".$u." ".$t2["result"][0]["CurrentBalance"]."\n";
    echo $g."Kode Reff:".$r." ".$t1["result"][0]["ReferCode"]."\n";
    echo $g."Email :".$h." ".$t1["result"][0]["Email"]."\n\n";
} else {
    echo $r."Invalid deviceID or Check your Internet Connection \n";
}

echo $g."Pilih yang mana :\n";
echo $p."[".$u."1".$p."]> ".$h."Kunjungi Web\n";
echo $p."[".$u."2".$p."]> ".$h."Nonton Video\n\n";
echo $b."masukkan".$r." nomor".$c." ";
$level = trim(fgets(STDIN));
echo $b."Masukkan".$r." jumlah".$c." ";
$jum = trim(fgets(STDIN));

switch ($level) {
    case 1:
        $an = 0;
        while ($an < $jum) {
            $an++;
            web($ur1, $pos1, $ua1, $r, $g, $p, $u, $c, $h);
            sleep(34);
        }
        echo $g."Selesai sudah".$r." ".$jum."".$u." Kali\n";
        break;

    case 2:
        for ($ui = 0; $ui < $jum; $ui++) {
            video($ur2, $ua2, $pos2, $r, $u, $g, $p, $u, $c);
            sleep(32);
        }
        echo $g."Seleai sudah".$r." ".$jum." ".$u."Kali\n";
        break;
}
?>
