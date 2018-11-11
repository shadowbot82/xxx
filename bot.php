<?php
// My FB : Manggala Febri Valentino
function news($uuid, $token, $tk, $jumlah, $wait){
    $x = 0; 
    while($x < $jumlah;x++) {
 
            
             
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://http://api.beritaqu.net/content/view?");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'http://article.kubiknews.com/');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 6.0.1; Andromax A26C4H Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/55.0.2883.91 Mobile Safari/537.36 qukan_android');
  ');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
		echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
        }
    }

print "KUBIK BOT\n";


echo "Uuid?\nInput : ";
$uuid = trim(fgets(STDIN));
echo "Token\nInput : ";
$token = trim(fgets(STDIN));
echo "tk\nInput : ";
$tk = trim(fgets(STDIN));
echo "Jumlah\nInput : ";
$jumlah = trim(fgets(STDIN));
echo "Jeda? 0-9999999999 (ex:0)\nInput : ";
$jeda = trim(fgets(STDIN));
$execute = news($uuid, $token, $tk, $jumlah, $jeda);
print $execute;
print "DONE ALL SEND\n";
?>
