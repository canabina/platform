<?php

class StreetController extends IndexController
{

	public function Index(){
		if ($street = Sili::$model->data->getStreets(['id[==]' => Sili::$app->request->get('id')])) {
			$this->pageTitle = "Як переіменували в м. Кіровоград вулицю ".$street[0]['old_name']."?";
			$area = Sili::$model->data->getAreas(['id[==]' => $street[0]]);
			$this->render = ['street', ['street' => $street[0], 'area' => $area[0]]]; 
		}else{
			return Sili::$app->application->redirect('/');
		}
	}

}

