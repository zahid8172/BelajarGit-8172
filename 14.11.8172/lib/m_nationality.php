<?php

require_once('DBClass.php');

class Nationality{

	private $db;

	public function Nationality(){
		$this->db = new DBClass();
	}

	public function readAllNationality(){
		$query = "Select * from nationality";
		return $this->db->getRows($query);	
	}
	
}