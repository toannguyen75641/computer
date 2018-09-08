<?php
	require_once "model/Model.php";

	class Controller 
	{
		public $model;

		public function loadModel($name) {
			$class = $name. "Model";
			include "model/".$class.".php";
			$this->$name = new $class();
		}
		public function redirect($url) {
		 	if(!empty($url)) {
		 		header("Location: $url");
		 		exit();
		 	}
		 }
	}
