<?php
require_once 'API.php':
class ITVapi extends API {
	
	function initialize() {

	}
	
	function getListings ($category) {
		
	}
	
	function getShow($name) {
		
	}
	
	function getShowById ($id) {
		
	}
	
	function search ($q) {
		$jsondata = file_get_contents("http://mercury.itv.com/api/json/dotcom/programme/searchatoz/" . urlencode($q));
		$obj = json_decode($jsondata, true);
		$videos = [];
		foreach ($obj["Result"][0]["Details"] as $items) {
			$videos[] = new Show($items["Programme"]["Programme"]["Id"],
						$items["Programme"]["Programme"]["Title"],
						$items["Programme"]["Programme"]["ShortSynopsis"],
						$items["Programme"]["Programme"]["LongSynopsis"],
						"ITV",
						"",
						"");
		}
		return $videos;
	}
}
$YOUapi = new ITVapi ();
var_dump($YOUapi -> search ("Coronation Street"));
?>