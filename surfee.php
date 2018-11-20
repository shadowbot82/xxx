<?php

echo "UserName  ==>  ";
$user = trim(fgets(STDIN));
echo "Jumlah  ==>  ";
$jum = trim(fgets(STDIN));

function asw($a, $user) {
                $no = rand(1,9999);
                $id = rand(1,999999);
                $body = '[question_id]='.$no.'&answers['.$id.']';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://app.surfee.co.id/api/v2/surveys/265/answers2");

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
		$headers = array ();
			$headers[] = "Content-Type: application/x-www-form-urlencoded; charset=UTF-8";
			$headers[] = "User-Agent: Dalvik/2.1.0 (Linux; U; Android 6.0.1; Andromax A26C4H Build/MMB29M)";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;	
}

for($a=0;$a<$jum;$a++){
sleep (0.5);
$oce = asw($a, $user);
echo $red."[".$kuning."√".$red."] ".$ijo."UserName : ".$user.$kuning." || ".$ijo.$oce.$red." [".$kuning."√".$red."] \n";
}


?>
