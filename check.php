<?php
include("token.eslock");
$biru="\033[1;34m";
$turkis="\033[1;36m";
$ijo="\033[92m";
$putih="\033[1;37m";
$pink="\033[1;35m";
$red="\033[1;31m";
$kuning="\033[1;33m";
$c="\033[1;0m";
system(clear);
sleep(1);
echo $ijo."   Opening$red Checking info $c";
$min=0;
$max=3;
while ($min < $max){
$min++;
sleep(1);
echo "•";
}
$minA=0;
$maxA=7000;
while ($minA < $maxA){
$minA++;
sleep(0);
echo $ijo."101001";
}

system(clear);
 $vr ="\033[1;92mVr 2.1\033[1;0m";
echo " 
$red    _  __     _     
$red   | |/ /_ __| |_   $kuning Created KrtbyNick
$red   | ' /| '__| __|  $kuning Library$red PHP CLI
$red   | . \| |  | |_   $kuning Compilation$ijo 9/3/2019
$red   |_|\_\_|   \__|  $kuning YouTuber$ijo KirinStudio
 $c \n\n";
echo"\033[1;41m This is a trial version developed by Krt developer, please contribute the version and comment information, and send it to krtbynick@gmail.com email box thanks! $c\n\n\033[1;47m$c";
$url_2="https://www.veeuapp.com:443/v1.0/incentive/vip?latitude=0.0&access_token=".$user_token."&longitude=0.0&timezone=GMT%2B07%3A00&locale=vi_VN";

$url="https://www.veeuapp.com:443/v1.0/users/".$user_id."?access_token=".$user_token;



$head = array();
$head [] ="Content-Type: application/json"; "charset=UTF-8";
          "Content-Length: 100";
          "Host: www.veeuapp.com";
          "Connection: Keep-Alive";
          "Accept-Encoding: gzip";
          "User-Agent: okhttp/3.10.0";


#$video = json_encode($body,true);
sleep(0);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
#curl_setopt($ch,CURLOPT_POST, $video);
#curl_setopt($ch,CURLOPT_POSTFIELDS, $video);

$show_data = curl_exec($ch);                                   curl_close($ch);
$js = json_decode($show_data,true);
#echo"$show_data\n";
#echo"Checking";
$fan = $js['fan_count'];
$flow = $js['follow_channel_count'];
$like = $js['like_count'];
$id = $js['user']['user_id'];
$lv = $js['user']['vip_level'];
$user = $js['user']['nickname'];
$email = $js['user']['email'];
echo $ijo."[!]$kuning  Flowers  ——>$ijo ".$fan."\n";
echo "[!]$kuning  Flowing  ———>$ijo ".$flow."\n";
echo "[!]$kuning  Like     ————>$ijo ".$like."\n";
echo "[!]$kuning  Level    —————>$ijo ".$lv."\n";
echo "[!]$kuning  Nickname ——————>$ijo ".$user."\n";
echo "[!]$kuning  Email    ———————>$ijo ".$email."\n";
echo "[!]$kuning  ID       ————————>$ijo ".$id."\n";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url_2);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
#curl_setopt($ch,CURLOPT_POST, $video);
#curl_setopt($ch,CURLOPT_POSTFIELDS, $video);
$show_data = curl_exec($ch);                                   curl_close($ch);
$js = json_decode($show_data,true);
$total = $js['total_equivalent_cash'];
echo "[!]$kuning  Exchange      —————————>$ijo ".$total."\n";
echo"—————————————————————————Donated Krt———————————————————————\n";
echo $ijo." > TTN Studio$c $red      277$\n$c";
echo $ijo." > CzD Studio$c $red      230$\n$c";
echo $ijo." > Offer TAT $c $red      191$\n$c";
echo $ijo." > NaviX     $c $red      85$\n$c";
echo $ijo." > TrongDung $c $red      421.100₫\n$c";
echo $ijo." > ThanhHa $c $red        278.780₫\n$c";
echo $ijo." > ManhQuang $c $red      222.222₫\n$c";
echo $ijo." > AnhTuan $c $red        120.999₫\n$c";
echo"———————————————————————————————————————————————————————————\n";

?>