<?php

class Load{
	
	function __construct()
	{
	}
	public function view($fileName, $data = false, $seven_day=false){
		if ($data == true) {
			extract($data);
		}
		if ($seven_day == true) {
			extract($seven_day);
		}
		include 'app/views/'.$fileName.'.php';
	}
	public function model($modelName){
		include 'app/Models/'.$modelName.'.php';
		return new $modelName();

	}
	
}
?>