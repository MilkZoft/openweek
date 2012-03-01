<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

class Pages_Controller extends ZP_Controller {
	
	public function __construct() {
		$this->application = $this->app("pages");
				
		$this->Templates = $this->core("Templates");

		$this->Templates->theme(_webTheme);

		$this->Pages_Model = $this->model("Pages_Model");
	}
	
	public function index() {		
		$this->defaultPage();
	}

	public function defaultPage() {
		$this->title("Welcome to my new website");

		$this->CSS("pages", $this->application);

		$data = $this->Pages_Model->getDefaultPage();

		if($data) {
			$vars["title"]    = $data[0]["Title"];
			$vars["content"]  = $data[0]["Content"];
			$vars["view"]  	  = $this->view("page", TRUE);

			$this->template("content", $vars);
		} else {
			$this->template("error404");
		}
	}

	public function page($slug, $language = NULL) {
		$this->CSS("pages", $this->application);

		$data = $this->Pages_Model->getPageBySlug($slug, $language);

		if($data) {
			$this->title($data[0]["Title"]);

			$vars["title"]    = $data[0]["Title"];
			$vars["content"]  = $data[0]["Content"];
			$vars["view"]  	  = $this->view("page", TRUE, $this->application);

			$this->template("content", $vars);
		} else {
			$this->template("error404");
		}
	}

}
