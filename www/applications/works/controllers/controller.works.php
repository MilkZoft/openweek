<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

class Works_Controller extends ZP_Controller {
	
	public function __construct() {		
		$this->Works_Model = $this->model("Works_Model");
		
		$this->application = $this->app("works");

		$this->Templates   = $this->core("Templates");
		$this->Templates->theme(_webTheme);
	}
	
	public function index() {
		$type = segment(1, isLang()) ? segment(1, isLang()) : "Design";

		$this->works($type);
	}
	
	public function works($type = "Design") {
		$this->title("My Works");
		$this->CSS("works", $this->application);

		$data = $this->Works_Model->getWorks($type);
		
		if($data) {
			$vars["works"] = $data;
			$vars["view"]  = $this->view("works", TRUE);

			$this->template("content", $vars);
		} else {
			$this->template("error404");
		}
	}	

}
