<?php

class PlacesController extends IndexController
{

	public function showPlaces(){

		$request = Sili::$app->request;

		if ($type = $request->get('type')) {
				
			$methodName = 'get'.ucfirst($type);

			$dataObject = Sili::$model->data;

			if (method_exists($dataObject, $methodName)) {

				$filter['AND'] = ['city_id' => $this->user->cityOwner->id];

				return $this->render = ['places', [

					'renderType' => $type,

					'data' => $dataObject->$methodName($filter),

					'cityName' => $this->user->cityOwner->name

				]];

			}

		}
			
		return Sili::$app->application->redirect('/admin');
	}

}