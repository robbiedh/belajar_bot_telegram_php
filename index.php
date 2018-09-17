<?php 
$url ="https://api.telegram.org/bot<your api>/getUpdates";
$b=1;

	# code...
	$jsonfile = file_get_contents($url);
		$a=json_decode($jsonfile, TRUE);
		if(!$a==null){
			
			$res=$a['result'];
			//echo $a['message']['chat']['id'];
			//foreach ($a as $key => $data) {
				# code...
			//var_dump($data);	
			//echo $data['result'][0]['update_id'];
			//	echo $data[0]['update_id'];
			
			

			//}
			foreach ($res as $key => $data_res) {
				echo $data_res['message']['text'].'<br>';
				
			}
			
	
}


 
//echo $a->ok;
