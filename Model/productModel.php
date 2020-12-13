<?php
	
	include "./dto/products.php";
	include "include/database.php";
	
	abstract class ProductsBaseClass extends Database
	{
		abstract function dvdTMPL();
		abstract function bookTMPL();
		abstract function furnitureTMPL();
		
		public function getAllProducts() : array
		{
			$sth = Database::getPDOCon()->query("SELECT * FROM products");
			$sth->setFetchMode(PDO::FETCH_CLASS, "ProductsDto");
			return $sth->fetchAll();
		}
		
		public function saveProduct($products)
		{		
			$sku = $_POST["sku"];
			$name = $_POST["name"];
			$price = $_POST["price"];
			$product_specification_data = $_POST["size"];
			$description = $_POST["product_specification"];
			$specificationType = $_POST["specification_type"];
			
			if(sizeof($product_specification_data) > 1)
				$product_specification_data = implode("x", $product_specification_data);
			
			$specificationType = $_POST["specification_type"].$product_specification_data;
			$query = "insert into products values(0,'$sku','$name',$price,'$specificationType')";
			Database::getPDOCon()->exec($query);
		}
		
		public function deleteProducts($product_ids)
		{
			$dataBase = new Database;
			$product_ids = implode(",",$product_ids["products"]);
			Database::getPDOCon()->exec("delete from products where id in($product_ids)");
		}
	}
	