<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

class Users_Controller extends ZP_Controller {
	
	public function __construct() {		
		$this->Templates   = $this->core("Templates");
		$this->Users_Model = $this->model("Users_Model");
		
		$this->helpers();
		
		$this->application = $this->app("users");
		
		$this->Templates->theme(_webTheme);
	}
	
	public function logout() {
		if(segment(3)) {
			unsetSessions(path(segment(3)));
		} else {
			unsetSessions(_webBase);
		}		
	}
		
	public function login($from = "users") {
		if(segment(3)) {
			$from = segment(3);
		} 
		
		if($from === "forums") { 
			$this->CSS("loginforums", TRUE);
		} else { 
			$this->CSS("login", $this->application);
		}
		
		$this->title("Login");
		
		if(POST("connect")) {
			if($this->Users_Model->isAdmin()) {
				$user = $this->Users_Model->getUserData();
			} else {
				$user = FALSE;
			}
			
			if($user) {
				SESSION("ZanUser", $user[0]["Username"]);
				SESSION("ZanUserPwd", $user[0]["Password"]);
				SESSION("ZanUserID", $user[0]["ID_User"]);

				
				if($from === "forums") {
					$vars["success"] = TRUE;
					$vars["view"]    = $this->view("login", $vars);
				} else {
					redirect(POST("URL"));
				}
			} elseif($from === "cpanel") {
				showAlert("Incorrect Login", path("cpanel"));
			} else {
				if($from === "forums") { 
					$vars["href"] 		= path("users" . _sh . "login" . _sh . $from);
					$vars["noregister"] = TRUE;
					$vars["alert"] 		= getAlert("Incorrect Login");
					$vars["view"]  		= $this->view("login", $vars);
				} else { 
					$vars["href"] 	= path("users" . _sh . "login");
					$vars["alert"] 	= getAlert("Incorrect Login");
					$vars["view"]  	= $this->view("login", TRUE);
				}		
			}		
		} else {
			if($from === "forums") { 
				$vars["href"] 		= path("users" . _sh . "login" . _sh . $from);
				$vars["noregister"] = TRUE;
				$vars["view"]  		= $this->view("login", $vars);
			} else { 
				$vars["href"] = path("users" . _sh . "login");
				$vars["view"] = $this->view("login", TRUE);
			}
		}
		
		$this->template("content", $vars);
	}
	
}
