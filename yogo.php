<?php

//link

$link = "https://api.yogopro.com/api/reward/watchVideo";

//body
video = array(
   'locale' => 'in_ID',
	  'task_extra_info' => '',
	  'task_name' => 'watch_video_ball_01',
	  'timezone' => 'GMT+07:00');
//encode
$body=json_encode($video,true);
//header
$head = array();
$head[] = "Host: api.yogopro.com";

          "Connection: Keep-Alive";
          "Accept-Encoding: gzip";
          "User-Agent: Mozilla/5.0 (Linux; U; Android 5.1; in-id; B11 Build/LMY47D) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30";

$header = array();
$header[] = "Content-Type: application/x-www-form-urlencoded";              
           
             "Content-Length: 690";
             "Host: api.yogopro.com";
             "Connection: Keep-Alive";
             "Accept-Encoding: gzip";
             "User-Agent: Mozilla/5.0 (Linux; U; Android 5.1; in-id; B11 Build/LMY47D) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30";
echo "Token : ";
$token=trim(fgets(STDIN));
             
             
while (true) :
sleep(1);
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $link,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $body0,
    CURLOPT_HTTPHEADER => $header,
    CURLOPT_SSL_VERIFYPEER => 0,
      ));
$result_video = curl_exec($curl);                                   curl_close($curl);
$jvid = json_decode($result_video,true);

if($jvid['code'] == '4040') {
echo "$red.[!] $putih nonton video:$red ".$jvid['message']."$putih\n";
sleep(1);
exit;}
	
?>
