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
class Show {
	
	public $name			  = "";
	public $description_short = "";
	public $description_long  = "";
	public $image_link		= "";
	public $avaliable_service = "";
	public $category		  = 0 ;
	public $id				= "";
	
	function __construct ($id, $n, $ds, $dl, $as, $c, $il) {
		$this->id = $id;
		$this->name = $n;
		$this->description_short = $ds;
		$this->description_long = $dl;
		$this->image_link = $il;
		$this->category = $c;
		$this->avaliable_service = $as;
	}
	
	//TODO: Implement all show printing here
	function print_long()  {} 
	
	function print_short() {}
	
}
//How a show should be represented
//NAME, Short Description, Long Description, Service ie: YOU, Category ie 0, image link
//$show = new Show ("","Test", "This is a test show", "This is really a test show, I'm not lying", "YOU", 0 "");
?>