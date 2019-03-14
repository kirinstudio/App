<?php
system(clear);
include("token.eslock");
$biru="\033[1;34m";
$turkis="\033[1;36m";
$ijo="\033[92m";
$putih="\033[1;37m";
$pink="\033[1;35m";
$red="\033[1;31m";
$kuning="\033[1;33m";
$c="\033[1;0m";
echo $ijo."   Opening$red VeeU Tool $c";
$min=0;
$max=3;
while ($min < $max){
$min++;
sleep(1);
echo "•";
}
$minA=0;
$maxA=1000;
while ($minA < $maxA){
$minA++;
sleep(0);
echo $ijo."1010010";
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
echo"\033[1;41m This is a trial version developed by Krt developer, please contribute the version and comment information, and send it to krtbynick@gmail.com email box thanks! $c\n\n\033[1;47m";

$url_2="https://www.veeuapp.com:443/v1.0/incentive/vip?latitude=0.0&access_token=".$user_token."&longitude=0.0&timezone=GMT%2B07%3A00&locale=in_ID";
$url="https://www.veeuapp.com:443/v1.0/incentive/tasks?access_token=".$user_token;

$head = array();
$head [] ="Content-Type: application/json"; "charset=UTF-8";
          "Content-Length: 100";
          "Host: www.veeuapp.com";
          "Connection: Keep-Alive";
          "Accept-Encoding: gzip";
          "User-Agent: okhttp/3.10.0";
$video= array('locale' => 'in_ID',
            'task_extra_info' => '',
	        'task_name' => 'lockscreen_watch_reward_01',
	        'timezone' => 'GMT+07:00');
$video = json_encode($body,true);
$min=0;
$max=1500;
while ($min < $max){
$min++;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch,CURLOPT_POST, $video);
curl_setopt($ch,CURLOPT_POSTFIELDS, $video);

$show_data = curl_exec($ch);                                   curl_close($ch);
$js = json_decode($show_data,true);
#echo"$show_data\n";
#echo"Checking";
$vip = $js['point']['vip_level'];
$p = $js['point']['cumulative_point'];
$r = $js['task']['display_name'];
$a = $js['task']['reward_point'];
$code = $js['code'];
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
if ($code == '4040') {
echo $c." You have run all the task for today, please come back tomorrow, if you have problems running this tool please take a screenshot with the error and send it to email $ijo krtbynick@gmail.com $c Thank you for using our tool\n";
exit;
#include(".checking/video.php");
} else{
if ($a == '2') {
      echo " $pink Krt —$red Level $c $ijo".$vip."$c |$c$kuning Exchange $c$ijo".$total."$c |$c$pink Process$c$red Low = ".$a."$pink Coin$c \n";
echo "\033[1;47m $red                  Support KrtAsmin\n";
}
if ($a == '3') {
      echo " $pink Krt —$red Level $c $ijo".$vip."$c |$c$kuning Exchange $c$ijo".$total."$c |$c$pink Process$c$kuning Medium = ".$a."$pink Coin$c \n";
echo "\033[1;47m $red                  Support KrtAsmin\n";
}
if ($a == '4') {
      echo " $pink Krt —$red Level $c $ijo".$vip."$c |$c$kuning Exchange $c$ijo".$total."$c |$c$pink Process$c$kuning Medium = ".$a."$pink Coin$c \n";
echo "\033[1;47m $red                  Support KrtAsmin\n";
}
if ($a == '1') {
      echo "$pink Krt —$red Level $c $ijo".$vip."$c |$c$kuning Exchange $c$ijo".$total."$c |$c$pink Process$c$red Low = ".$a."$pink Coin$c \n";
echo "\033[1;47m $red                  Support KrtAsmin\n";
}
if ($a == '5') {
      echo "$pink Krt —$red Level $c $ijo".$vip."$c |$c$kuning Exchange $c$ijo".$total."$c |$c$pink Process$c$ijo High = ".$a."$pink Coin$c \n";
echo "\033[1;47m $red                  Support KrtAsmin\n";
}
if ($a == '6') {
      echo "$pink Krt —$red Level $c $ijo".$vip."$c |$c$kuning Exchange $c$ijo".$total."$c |$c$pink Process$c$ijo High = ".$a."$pink Coin$c \n";
echo "\033[1;47m $red                  Support KrtAsmin\n";
}
if ($a == '7') {
      echo "$pink Krt —$red Level $c $ijo".$vip."$c |$c$kuning Exchange $c$ijo".$total."$c |$c$pink Process$c$ijo High = ".$a."$pink Coin$c \n";
echo "\033[1;47m $red                  Support KrtAsmin\n";
}
if ($a == '8') {
      echo "$pink Krt —$red Level $c $ijo".$vip."$c |$c$kuning Exchange $c$ijo".$total."$c |$c$pink Process$c$ijo High = ".$a."$pink Coin$c \n";
echo "\033[1;47m $red                  Support KrtAsmin\n";
}
if ($a == '9') {
      echo "$pink Krt —$red Level $c $ijo".$vip."$c |$c$kuning Exchange $c$ijo".$total."$c |$c$pink Process$c$ijo High = ".$a."$pink Coin$c \n";
echo "\033[1;47m $red                  Support KrtAsmin\n";
}
if ($a == '10') {
      echo "$pink Krt —$red Level $c $ijo".$vip."$c |$c$kuning Exchange $c$ijo".$total."$c |$c$pink Process$c$ijo High = ".$a."$pink Coin$c \n";
echo "\033[1;47m $red                  Support KrtAsmin\n";
}
if ($a == '11') {
      echo "$pink Krt —$red Level $c $ijo".$vip."$c |$c$kuning Exchange $c$ijo".$total."$c |$c$pink Process$c$ijo High = ".$a."$pink Coin$c \n";
echo "\033[1;47m $red                  Support KrtAsmin\n";
}
if ($a == '15') {
      echo "$pink Krt —$red Level $c $ijo".$vip."$c |$c$kuning Exchange $c$ijo".$total."$c |$c$pink Process$c$ijo High = ".$a."$pink Coin$c \n";
echo "\033[1;47m $red                  Support KrtAsmin\n";
}
        }
    }

?>