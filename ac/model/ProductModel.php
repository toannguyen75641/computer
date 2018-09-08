<?php
	require_once "Model.php";

	Class ProductModel extends Model 
	{
		public function __construct() {
			parent::__construct();
			$this->table = "product";
		}

		public function getAll() {
			$query = $this->ex_query("select * from ".$this->table);
			$result = [];
			while ($row = mysqli_fetch_assoc($query)){
				$result[] = $row;
			}
			return $result;
		}

		public function Add($data = []) {
			$query = "INSERT INTO ".$this->table." (product_code, category_id, name, quantity, image, price, description, status, created) VALUES ('".$data['product_code']."','".$data['category_id']."','".$data['name']."','".$data['quantity']."','".$data['image']."','".$data['price']."','".$data['description']."','".$data['status']."','".$data['created']."')";
			return $this->ex_query($query);
		}

		public function Edit($id) {
			$query = $this->ex_query("SELECT * from ".$this->table. " where id = ".$id);	
			$row = mysqli_fetch_assoc($query);
			$result[] = $row;
			return $result;
		}

		// public function Update($data, $id) {
		// 	$query = "UPDATE ".$this->table." (product_code, category_id, name, quantity, price, description, status, created) VALUES ('".$data['product_code']."','".$data['category_id']."','".$data['name']."','".$data['quantity']."','".$data['price']."','".$data['description']."','".$data['status']."','".$data['created']."')";
		// 	return $this->ex_query($query);
		// } 

		public function Delete($id) {
			$query = "Delete from ".$this->table." where id = ".$id;
			return $this->ex_query($query);
		}

	}