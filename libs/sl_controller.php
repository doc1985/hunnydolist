<?php

class SL_Controller{

	public function __construct(){

	}

	public function load($filename){
		if(file_exists("controllers/".$filename.".php")){
			require "controllers/".$filename.".php";
			$this->$filename = new $filename();
			return true;
		}else{
			return false;
		}


	}
}