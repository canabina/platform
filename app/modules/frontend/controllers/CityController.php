<?php

class CityController extends IndexController
{

	public function index()
	{
	
		$city = Sili::$app->request->get('cityName');

		if ($city && $cityData = Sili::$model->data->getCitiyByEngName($city)) {

			mb_internal_encoding("UTF-8");

			$streets = Sili::$model->data->getStreets(['ORDER' => 'old_name', 'AND' => ['old_name[!]' => '', 'city_id[==]' => $cityData['id']]]);

			$this->pageTitle = 'Rename.kr.ua - Нові назви вулиць міста Кіровограда';

			$responce = [];
			foreach ($streets as $key => $value) 
				$responce[mb_strtoupper(mb_substr($value['old_name'], 0, 1))][] = $value;
		
			return $this->render = ['city', [
										'data' => $responce,
										'areas' => Sili::$db->select('areas', '*'),
										'jsonRespounce' => json_encode($responce),
										'cityData' => $cityData
									 ]
							];
		}else{
			return Sili::$app->application->redirect('/');
		}


	}

}






