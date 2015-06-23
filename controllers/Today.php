<?php

class Today extends SL_Controller{
	public function __construct(){

	}

	public function index(){
		new SL_View("header");
		new SL_View("today");
		new SL_View("footer");
	}
}