<?php

class PageController extends IndexController
{

	public function index($params = false)
	{
		$this->pageTitle = $params['pageName'] == 'docs' ? 'Як використовувати API rename.kr.ua' : 'Про проект';
		
		$this->render = [$params['pageName']];

	}

}

