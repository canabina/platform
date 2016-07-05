<?php

class MainController extends IndexController
{

	public function index()
	{
		
		$this->layout = 'welcome';

		$this->render = ['main'];

	}

}






