<?php
require_once 'API.php';
class ITVapi extends API {
	
	function initialize() {

	}
	
	function getListings ($category) {
		
	}
	
	function getShow($name) {
		
	}
	
	function getShowById ($id) {
		
	}
	
	function search($q) {
		$url = "http://mercury.itv.com/api/json/dotcom/programme/searchatoz/" . rawurlencode($q);
		$jsondata = file_get_contents($url);
		echo $url;
		$obj = json_decode($jsondata, true);
		$videos = array();
		foreach ($obj["Result"][0]["Details"] as $items) {
			$videos[] = new Show($items["Programme"]["Programme"]["Id"],
								$items["Programme"]["Programme"]["Title"],
								$items["Programme"]["Programme"]["ShortSynopsis"],
								$items["Programme"]["Programme"]["LongSynopsis"],
								$items["Programme"]["ImageUri"],
								"",
								"ITV"
								);
		}
		return $videos;
	}
}
$YOUapi = new ITVapi ();
print_r($YOUapi -> search("Coronation Street"));
?>