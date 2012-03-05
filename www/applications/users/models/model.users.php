<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

class Users_Model extends ZP_Model {

	public function __construct() {
		$this->Db = $this->db();
		
		$this->config("email");
		
		$this->Email = $this->core("Email");
		
		$this->helpers();

		$this->Data = $this->core("Data");

		$this->table = "users";
	}
	
	
	
	public function isAdmin($sessions = FALSE) {
		if($sessions) {		
			$username = SESSION("ZanUser");
			$password = SESSION("ZanUserPwd");	
		} else {			
			$username = POST("username");
			$password = POST("password", "encrypt");
		}
		
		$this->Db->table($this->table);
	
		$data = $this->Db->findBySQL("Username = '$username' AND Pwd = '$password' AND Privilege != 'Member'");

		if($data) {
			return TRUE;
		} else {		
			return FALSE;
		}	
	}
	
	
	
	public function getUserData($sessions = FALSE) {		
		if($sessions) {		
			$username = SESSION("ZanUser");
			$password = SESSION("ZanUserPwd");						
		} else {			
			$username = POST("username");
			$password = POST("password", "encrypt");
		}
		
		$data = $this->Db->findBySQL("Username = '$username' AND Pwd = '$password' AND Situation = 'Active'", $this->table);	
		
		$user = FALSE;
		
		if($data) {
			$user[0]["ID_User"]  = $data[0]["ID_User"];
			$user[0]["Username"] = $data[0]["Username"];
			$user[0]["Password"] = $data[0]["Pwd"];
		}
			
		return $user;
	}

}
