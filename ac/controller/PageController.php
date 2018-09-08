<?php
	require_once "Controller.php";

	class PageController extends Controller
	{

		public function index() {
			$this->loadModel("Product");
			$list = $this->Product->getAll();

			include "view/customers/list.php";
		}
	}
