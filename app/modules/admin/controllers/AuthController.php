<?php

class AuthController extends IndexController
{

	public function login()
	{
		$this->layout = 'login';


		if (Sili::$model->user->isAuth()) 
			return Sili::$app->application->redirect('/admin/main');

		$message = false;
		if ($post = Sili::$app->request->post()){
			if (Sili::$model->user->signin($post)) {
				Sili::$app->application->redirect('/admin');
			}else
				$message = ['status' => 'error', 'body' => 'Error'];
		} 


		
		$this->render = ['login', ['message' => $message, 'recaptchaUrl' => $recaptchaUrl]];
	}

	public function passwordRemind(){
		$this->layout = 'login';

		$captcha = Sili::$app->captcha;

		$user = Sili::$model->user;

		$message = false;

		if ($post = Sili::$app->request->post()) {
			if ($post['recaptcha'] == $captcha->getRecaptchaValue() && $post['username']) {
				$result = $user->passwordRemind();
				$message = ['status' => 'success', 'body' => 'Инструкции высланы на ваш E-Mail'];
				if ($result = false) 
					$message = ['status' => 'error', 'body' => 'Такого пользователья не найденно'];
			}else
				$message = ['status' => 'error', 'body' => 'Неверный код с картинки'];
		}

		$recaptchaUrl = $captcha->getCaptchaUrl();

		$this->render = ['passwordRemind', ['recaptchaSrc' => $recaptchaUrl, 'message' => $message]];
	}


	public function logout(){
		Sili::$app->session->set('auth', false);
		return Sili::$app->application->redirect('/admin/login');
	}

}