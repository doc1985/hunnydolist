<?php

class SL_Model{
	protected $db;

	public function __construct(){
		$this->db = new mysqli("localhost","root","","hunnydolist");
	}

	public function load($filename){
		if(file_exists("models/".$filename.".php")){
			require_once("models/".$filename.".php");
			$obj = new $filename();
			return $obj;
		}

		return false;
	}
}