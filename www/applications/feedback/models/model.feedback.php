<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

class Feedback_Model extends ZP_Model {
	
	public function __construct() {
		$this->Db = $this->db();
		
		$this->config("email", "feedback");

		$this->helpers();
	
		$this->Email = $this->core("Email");
		
		$this->Email->setLibrary("phpmailer");
		
		$this->Email->fromName  = _webName;
		$this->Email->fromEmail = _webEmailSend;

		$this->table = "feedback";
	}
	
	public function send() {
		
		if(!POST("name")) {
			return getAlert("You need to write your name");
		} elseif(!isEmail(POST("email"))) {
			return getAlert("Invalid E-Mail");
		} elseif(!POST("message")) {
			return getAlert("You need to write a message");
		}
		
		$data = array(
			"Name"       => POST("name"),
			"Email"      => POST("email"),
			"Country"    => POST("countries"),
			"City"       => POST("city"),
			"Message"    => POST("message", "decode", FALSE),
			"Start_Date" => now(4),
			"Text_Date"  => now(2)
		);
		
		$insert = $this->Db->insert($this->table, $data);
			
		if(!$insert) {
			return getAlert("Insert error");
		}

		$this->sendMail();
		
		$this->sendResponse();			
		
		return getAlert("Your message has been sent successfully, we will contact you as soon as possible, thank you very much!", "success");
	}
	
	private function sendResponse() {
		$this->Email->email	  = POST("email");
		$this->Email->subject = __(_("Automatic response")) . " - " . decode(_webName);
		$this->Email->message = 	'
									<p>'. __(_("Your message has been sent successfully, we will contact you as soon as possible, thank you very much!")) .'</p>							
									<p><a href="' . _webBase . '" title="' . decode(_webName) . '">' . decode(_webName) . '</p>									
									';
		$this->Email->send();
	}
	
	private function sendMail() {
		$this->Email->email	  = _webEmailSend;
		$this->Email->subject = __(_("New Message")) ." - ". decode(_webName);
		$this->Email->message = 	'
									<p>'. __(_("Message")) .'</p>									
									<p><strong>'. __(_("Name")) .':</strong> <br /> '    . POST("name")    . '</p>									
									<p><strong>'. __(_("Email")) .':</strong> <br /> '   . POST("email")   . '</p>									
									<p><strong>'. __(_("Company")) .':</strong> <br /> ' . POST("company") . '</p>									
									<p><strong>'. __(_("Phone")) .':</strong> <br /> '   . POST("phone")   . '</p>									
									<p><strong>'. __(_("Subject")) .':</strong> <br /> ' . POST("subject") . '</p>									
									<p><strong>'. __(_("Message")) .':</strong> <br /> ' . POST("message", "decode", FALSE) . '</p>									
									';
		$this->Email->send();
	}
	
	public function getCountries() {
		$countries = $this->Db->query("SELECT DISTINCT (Country) FROM zan_world ORDER BY Country");
		
		return $countries;
	}
	
	public function getCities($country) {
		$cities = $this->Db->query("SELECT District FROM zan_world WHERE Country = '$country' ORDER BY Country");
		
		return json_encode($cities);
	}
	
}
