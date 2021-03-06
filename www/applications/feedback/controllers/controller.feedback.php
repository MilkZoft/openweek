<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

class Feedback_Controller extends ZP_Controller {
	
	public function __construct() {		
		$this->Feedback_Model = $this->model("Feedback_Model");
		$this->Templates 	  = $this->core("Templates");
		$this->helper("forms");
		$this->application = "feedback";
		
		$this->Templates->theme(_webTheme);
	}
	
	public function index() {
		$this->feedback();
	}
	
	private function feedback() {
		$this->title("Feedback");
		$this->CSS("feedback", $this->application);
		$this->js("actions", $this->application);
		
		$vars["countries"] = $this->Feedback_Model->getCountries();
		
		if(POST("send")) {						
			$vars["alert"] = $this->Feedback_Model->send();
			$vars["view"]  = $this->view("send", TRUE);
			
			$this->template("content", $vars);
		} else {
			$vars["view"] = $this->view("send", TRUE);
			
			$this->template("content", $vars);		
		}
	}

}
