<?php

class News_model extends CI_Model {
	
	public function __construct() {
		
		$this->load->database();
		
	}
	
	public function get_news($slug = false) {
		
		if ($slug === false) {
			$q = $this->db->get("t01_news");
			return $q->result_array();
		}
		
		$q = $this->db->get_where("t01_news", array("slug" => $slug));
		return $q->row_array();
		
	}
	
}