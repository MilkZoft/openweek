<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

class Ajax_Controller extends ZP_Controller {
	
	public function __construct() {
		$this->Feedback_Model = $this->model("Feedback_Model");
		$this->Templates 	  = $this->core("Templates");
		$this->helper("forms");
		$this->application = "feedback";
	}
	
	public function index($country) {
		print $this->Feedback_Model->getCities($country);
	}
		
	public function getCities($country) {
		print $this->Feedback_Model->getCities($country);
	}
}
