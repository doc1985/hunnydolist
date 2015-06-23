<?php

class SL_Controller{
	
	public function __contruct(){
		
	}

	public function load($filename){
		if(file_exists("controllers/".$filename.".php")){
			require "controllers/".$filename.".php";
			return new $filename();
		}

		return false;
	}
}