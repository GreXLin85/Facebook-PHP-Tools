<?php
function FacebookVideoScraper($videoid,$token){ 
	$jsonstr = file_get_contents("https://graph.facebook.com/".$videoid."?access_token=".$token);
	$json = json_decode($jsonstr);
	return $json->source;
}
?>