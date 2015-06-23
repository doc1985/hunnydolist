<?php

class SL_View{
	private $data = array();

	public function __construct($filename,$data){
		$this->data = $data;

		if(file_exists("views/".$filename.".php")){
			require_once("views/".$filename.".php");
		}
	}
}