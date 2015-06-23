<?php

class Demo extends SL_Controller{

	public function __construct(){

	}
	public function testing(){
		$model = new SL_Model();
		var_dump($model);
	}
}