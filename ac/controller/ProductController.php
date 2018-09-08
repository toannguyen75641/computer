<?php
	require_once "Controller.php";

	class ProductController extends Controller
	{

		public function admin() {
			$this->loadModel("Product");
			$list = $this->Product->getAll();
			include "view/users/product/list.php";
		}

		public function add() {
			include "view/users/product/add.php";
		}

		public function store() {
			$data = $_POST;
			if (!empty($_FILES['image'])) {
				if ($_FILES['image']['error'] === 0) {
					$file_name = "img/".$_FILES['image']['name'];
					if(move_uploaded_file($_FILES['image']['tmp_name'], $file_name)) {
						$data['image'] = $file_name;
					}
				}
			}
			$this->loadModel("Product");
			$rs = $this->Product->Add($data);
			if($rs>0) {
				$this->redirect("index.php?controller=Product&action=Admin&message=create_success");
			}
		}

		public function edit() {
			$this->loadModel("Product");
			$id = $_GET['id'];
			$this->Product->Edit($id);
			include "view/users/product/edit.php";
		}

		// public function update() {
		// 	$data = $_POST;
		// 	$id = $_GET['id'];
		// 	$this->loadModel("Product");
		// 	$rs = $this->Product->Update($data, $id);
		// 	if($rs>0) {
		// 		$this->redirect("index.php?controller=Product&action=Admin&message=edit_success");
		// 	}
		// }

		public function delete() {
			$this->loadModel("Product");
			$id = $_GET['id'];
			$rs = $this->Product->Delete($id);
			if($rs>0) {
				$this->redirect("index.php?controller=Product&action=Admin&message=delete_success");
			}
		}
	}
