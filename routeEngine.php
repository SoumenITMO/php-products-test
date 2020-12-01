<?php	
	require_once "Controllers/productController.php";
	require_once "validation/validator.php";
	
    class ROUTER_ENGINE extends VALIDATOR
	{
		var $controllerURI;
		var $urlSlugs = array();
		
		public function __construct()
		{
			$this->controllerURI = explode("/", $_SERVER["REQUEST_URI"])[sizeof(explode("/", $_SERVER["REQUEST_URI"])) - 2];
		} 
		
		public function get($route, $controller)
		{									
			if($route == $this->controllerURI)
			{
				$getControllerClass = explode("@",$controller)[0];			
				$getControllerClass::{explode("@",$controller)[1]}();
			}
		}
		
		public function post($route, $controller, $required_validation = false)
		{
			$validation_rules = array("sku" => "required", 
									  "name" => "required", 
									  "price" => "required", 
									  "product_type" => "required", 
									  "product_specification" => "required", 
									  "specification_type" => "required");
			
				if($route == $this->controllerURI)
				{
					if(!empty($_POST))
					{
						$this->validate($_POST, $validation_rules);
						$errors = $this->errors($_POST, $validation_rules);

						$_SESSION["errors"] = json_encode($errors);
						$getControllerClass = explode("@",$controller)[0];			
						$getControllerClass::{explode("@",$controller)[1]}();
					}
					
					else
					{
						echo "Method not allowed.";
					}
				}
			}
	}
?>