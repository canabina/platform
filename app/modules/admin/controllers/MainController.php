<?php

class MainController extends IndexController
{

	public function index()
	{
		$this->pageTitle = 'Test site'; 
		
		$this->render = ['main'];
	}

}