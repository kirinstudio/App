<?php
#color
$biru="\033[1;34m";
$turkis="\033[92m";
$ijo="\033[92m";
$putih="\033[1;37m";
$pink="\033[1;35m";
$red="\033[1;31m";
$kuning="\033[1;33m";

#logo
system("clear");
echo " 
$ijo      __          ___ _
$turkis      \ \        / (_|_)
$pink       \ \  /\  / / _ _ _   _
$red        \ \/  \/ / | | | | | |$putih Library$kuning PHP$putih CIAL
$kuning         \  /\  /  | | | |_| |$ijo BETA$red v2.1$putih (223)
$biru          \/  \/   |_| |\__,_|$pink Created by$putih Wiju
$turkis                    _/ |
$red                   |__/ 
                   \n";

                   
#login


$user =readline("$kuning [!]$pink User name: ");

#checking
if ($user == 'krtbynick1234') {
echo $ijo." [!]$red Đăng nhập chế độ UserPass vui lòng chờ !\n\n";
sleep(3);
$numrun =readline("$kuning [!]$pink Number of Run Tools: ");
echo "\n\n";
include("bot.php");
} else {
if ($user == 'Krtbynick' OR $user == 'krtbynick') {

$paswd =readline("$kuning [!]$red Password: ");
if ($paswd == 1234) {

$numrun =readline("$kuning [!]$pink Number of Run Tools: ");
echo "\n\n";
include("bot.php");

} else {

echo $putih."\n The password you have entered$kuning $paswd$putih is invalid, please re-enterA\n\n";
exit;
 }

} else { 

echo $putih."\n The account you have entered$kuning $user$putih is invalid, please re-enter\n\n";
exit;
}
 }
?>