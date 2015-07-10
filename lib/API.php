<?php
abstract class API {
	public $service_name = "";
	
	function __construct() {
		$this->initialize();
	}
	
	abstract function initialize();
	
	abstract function getListings($category);
	
	abstract function getShow($name);
	
	function decodeCategory ($category) {
		switch ($category) {
			case "COM":
				return "Comedey";
			case "DOC":
				return "Documentary";
			default:
				return null;
		}
	}
	
}
?>