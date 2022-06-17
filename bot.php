<?php
#include("in.php");
$biru="\033[1;34m";
$turkis="\033[92m";
$ijo="\033[92m";
$putih="\033[1;37m";
$pink="\033[1;35m";
$red="\033[1;31m";
$kuning="\033[1;33m";
$min=0;
$max=$numrun;
$t_start = microtime(true);
function random_str( int $length = 64, string $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ' ): string { if ($length < 1) { throw new \RangeException("Length must be a positive integer"); 
} 
$pieces = []; $max = mb_strlen($keyspace, '8bit') - 1;
  for ($i = 0; $i < $length; ++$i) { 
  $pieces []= $keyspace[random_int(0, $max)]; 
   } return implode('', $pieces); 
}
while ($min < $max){
$min++;
$r_vina = rand (81,85);
$r_viet = rand (32,39);
$r_mobi = rand (70,78);
$rq_vvm = rand (32,85);
$r_end = rand (11111111,99999999);
$v_1 =" Vinaphone";
$v_2 =" Viettel";
$m =" Mobiphone";
//Random String

$b = random_str(6, '0123456789abcdefghijklmnopqrstuvwxyz0123456789');
$band = random_str(1, '24');
$lv = rand(0,7);
$d_1 = rand(0,27);
$d_2 = rand(0000,9999);



//Random Network
                if (isset($rq_vvm)) {

                    switch ($rq_vvm) {
                        case 81:
                        case 82:
                        case 83:
                        case 84:
                        case 85:
 usleep(1500000);
 
 
echo $ijo."╔—————————————————————————————————————————————————————————╗\n";
echo $pink."  Attacks$ijo Success$putih +84".$rq_vvm."$r_end";
                        echo "$pink $v_1 $ijo Code:";
echo "$kuning $b\n";
$k = fopen("log/Vinaphone.txt", "a") or die("Unable to open file!");
$log_vn1 = " +84$rq_vvm$r_end  $v_1 Code: $b \n";
echo $ijo."  Level$kuning $lv$ijo Band$kuning 2.".$band."Ghz$ijo            Data-rate$kuning ";
echo $d_1.",$d_2 / MB\n";
echo $ijo."╚—————————————————————————————————————————————————————————╝\n";
 
                       fwrite($k, $log_vn1);
                       
                            break;
                        case 32:
                        case 33:
                        case 34:
                        case 35:
                        case 36:
                        case 37:
                        case 38:
                        case 39:
 usleep(1500000);
echo $ijo."╔—————————————————————————————————————————————————————————╗\n";
echo $pink."  Attacks$ijo Success$putih +84".$rq_vvm."$r_end";
                        echo "$pink $v_2 $ijo Code:";
echo "$kuning $b\n";
$k = fopen("log/Viettel.txt", "a") or die("Unable to open file!");
$log_vn2 = " +84$rq_vvm$r_end  $v_2 Code: $b \n";
echo $ijo."  Level$kuning $lv$ijo Band$kuning 2.".$band."Ghz$ijo            Data-rate$kuning ";
echo $d_1.",$d_2 / MB\n";
echo $ijo."╚—————————————————————————————————————————————————————————╝\n";
                       fwrite($k, $log_vn2);
                            break;
                        case 70:
                        case 71:
                        case 72:
                        case 73:
                        case 74:
                        case 75:
                        case 76:
                        case 77:
                        case 78:
 usleep(1500000);
echo $ijo."╔—————————————————————————————————————————————————————————╗\n";
echo $pink."  Attacks$ijo Success$putih +84".$rq_vvm."$r_end";
                        echo "$pink $m $ijo Code:";
echo "$kuning $b\n";
$k = fopen("log/Mobilephone.txt", "a") or die("Unable to open file!");
$log_m = " +84$rq_vvm$r_end  $m Code: $b \n";
echo $ijo."  Level$kuning $lv$ijo Band$kuning 2.".$band."Ghz$ijo            Data-rate$kuning ";
echo $d_1.",$d_2 / MB\n";
echo $ijo."╚—————————————————————————————————————————————————————————╝\n";
                       fwrite($k, $log_m);
                            break;
                        default:
usleep(1110000); 
$t_end = microtime (true);
$time = $t_end - $t_start;
$count = $max - $min;
echo $ijo."╔—————————————————————————————————————————————————————————╗\n";
echo $pink."  Attacks$red Failed$putih +84".$rq_vvm."xxx";
echo $red."    Không tìm thấy nhà mạng!\n";
echo $kuning."  Request-ID$putih $min$biru Time-xPrssMap$putih $time$kuning Count$red $count\n";
echo $ijo."╚—————————————————————————————————————————————————————————╝\n";
usleep(1590000);
         }
                        }
                        

}
system("clear");
include("in_2.php");
?>
