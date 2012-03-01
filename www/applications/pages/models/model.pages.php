<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

class Pages_Model extends ZP_Model {
	
	public function __construct() {
		$this->Db = $this->db();
		
		$this->helpers();
		
		$this->table = "pages";

		$this->language = whichLanguage();
	}
	
	public function getDefaultPage() {
		$data = $this->Db->findBySQL("Principal = 1 AND Language = '$this->language'", $this->table);
		
		return $data;	
	}

	public function getPageBySlug($slug, $language = NULL) {
		$language = is_null($language) ? $this->language : $language;

		$data = $this->Db->findBySQL("Slug = '$slug' AND Language = '$language'", $this->table);

		return $data;
	}
	
}
