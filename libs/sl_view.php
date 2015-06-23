<?php

class SL_View{
	private $data = array();

	public function __construct($filename,$data = array()){
		$this->data = $data;

		if(file_exists("views/".$filename.".php")){
			require("views/".$filename.".php");
		}
	}
}