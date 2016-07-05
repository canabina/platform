<?php

class IndexController extends Controller
{

	protected $user;

	public function beforeAction()
	{
		if (!Sili::$model->user->isAuth() && $this->controllerId != 'AuthController' && $this->actionId != 'login') 
			return Sili::$app->application->redirect('/admin/login');

		$this->user = (object)Sili::$model->user->getUser();

		$this->user->cityOwner = (object)Sili::$model->data->getCity(['owner_id' => $this->user->id]);

		return true;
	}

	public function afterAction(){
		$this->layoutVars = ['assetsUrl' => '/assets/admin/'];
	}

	public function isError($code = false){
		return Sili::$app->application->redirect('/admin');
	}

}