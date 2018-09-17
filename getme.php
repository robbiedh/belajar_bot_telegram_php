<?php
$url ="https://api.telegram.org/bot<your api>/getMe";

$jsonfile = file_get_contents($url);
$a=json_decode($jsonfile, TRUE);



	var_dump($a['result']['username']);





  ?>