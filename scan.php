<?php
// Copyleft By MarsHall - AnarchoXploit
error_reporting(0);
echo "\r
############################### 
#                             #
#  Sql Lokomedia admin finder #
#    Coded By MarsHall        #
#  Thanks To : ErrorByte      #
############################### 
\n";
$vic = $argv[1];
$list = file_get_contents("list.txt");
if(!empty($argv[1])) {
$page = explode("\n", $list);
foreach($page as $cok){
if(!empty($cok)) {
$url = $vic.$cok;
$c = curl_init();
curl_setopt($c, CURLOPT_HEADER, true);   
curl_setopt($c, CURLOPT_NOBODY, true); 
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($c, CURLOPT_URL, $url);
curl_setopt($c, CURLOPT_VERBOSE, false);
curl_setopt($c, CURLOPT_TIMEOUT, 10);
$ex = curl_exec($c);
$kode = curl_getinfo($c, CURLINFO_HTTP_CODE);
if($kode == "200") {
$res = $url." => Find \n";
$result .= $url." => Find \n";
echo $res;
echo "\nKetik quit Untuk Keluar, Enter untuk Lanjut\n";
echo "Masukkan Pilihan : ";
if(trim(fgets(STDIN)) == "quit") {
echo "\nResult : \n\n";
echo $result;
exit;
} else {
continue;
}
} else {
echo $url." => Not Found \n";
} 
} else {
continue;
}
}
echo "\nResult : \n\n";
echo $result;
} else {
echo "\nMasukkin Target Nya Anjenkkk\n";
}
?>