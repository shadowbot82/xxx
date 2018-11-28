<?php


function pivot($a, $did, $m, $sign) {
                
                $body = 'a'.$a.'h_did'.$did.'h_m'.$m.'h_sign'.$sign;"
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://api.pivot.one/api/read_mini/receive_read_reward");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
		$headers = array ();
			$headers[] = "Content-Type: text/plain; charset=utf-8";

			$headers[] = "Dalvik/2.1.0 (Linux; U; Android 6.0.1; Andromax A26C4H Build/MMB29M)";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;	
}

echo "Masukan did : ";
$did=trim(fgets(STDIN));
echo "Masukan m : ";
$m=trim(fgets(STDIN));
echo "Masukan sign : ";
$sign=trim(fgets(STDIN));

for($a=0;$a<$jum;$a++){
sleep (0.5);
$oce = pivot($a, $did, $m, $sign);
echo "".$oce"\n";

?>
