<?php 

class user extends model
{
		
	public function signin($data){
		if ($data['password'] && $data['username']) {
			$user = Sili::$db->get('users', '*', ['username' => $data['username']]);
			if ($user) {
				if (md5($data['password']) == $user['password']) {
					Sili::$app->session->set('auth', $user['id']);
					return true;
				}
			}
		}
		return false;
	}

	public function isAuth(){
		return Sili::$app->session->get('auth', false);
	}

	public function getUser(){
		if ($id = $this->isAuth()) 
			return Sili::$db->get('users', '*', ['id' => $id]);
		
		return false;
	}

}