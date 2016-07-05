<?php 

class data extends model
{
	function getStreets($filter = []){
		return Sili::$db->select('data', '*', $filter);
	}

	function getAreas($filter = []){
		return Sili::$db->select('areas', '*', $filter);
	}

	function getCitiyByEngName($name = false){
		return Sili::$db->get('cities', '*', ['name_eng[==]' => $name]);
	}

	function getCity($filter = []){
		return Sili::$db->get('cities', '*', $filter);
	}

}