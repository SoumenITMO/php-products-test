<?php	

	require_once "include/database.php";

	class GetProductsModel extends Database
	{
		public static function getAllProducts()
		{
			$PRODUCTS = array();
			
			$dataBase = new Database;
			
			$result = $dataBase->dbExecQuery("select * from products");
			while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
				array_push($PRODUCTS, $row);
			}
			return $PRODUCTS;
		}
		
		public function deleteProducts($product_ids)
		{
			$dataBase = new Database;
			echo $product_ids = implode(",",$product_ids["products"]);
			$dataBase->dbExecQuery("delete from products where id in($product_ids)");
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
			
			$dataBase = new Database;
			$dataBase->dbExecQuery($query);
		}
	}	
?>