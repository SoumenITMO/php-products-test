<?php
	
	require_once "Model/productModel.php";
	require_once "views/products_list.php";
	require_once "templateEngine.php";
	require_once "validation/validator.php";
	
	class ProductController extends GetProductsModel
	{							
		public static function home()
		{	
			$tmplEngine = new TemplateEngine;
			$tmplEngine->getView("products_list.php", GetProductsModel::getAPPURL(), array("products" => GetProductsModel::getAllProducts()));
		}
		
		public static function addproduct()
		{
			session_start();			
			$tmplEngine = new TemplateEngine;
			if(isset($_SESSION["errors"]))
				$tmplEngine->getView("product_add.php", GetProductsModel::getAPPURL(), array()) ;
			
			if(isset($_SESSION["errors"]))
				$tmplEngine->getView("product_add.php", GetProductsModel::getAPPURL(), array()) ;
			
			$_SESSION["errors"] = "";
		}
		
		public function dvdTMPL()
		{
			$tmplEngine = new TemplateEngine;
			echo $tmplEngine->getView("dvd_view.php", GetProductsModel::getAPPURL());
		}
		
		public function bookTMPL()
		{
			$tmplEngine = new TemplateEngine;
			echo $tmplEngine->getView("book_view.php", GetProductsModel::getAPPURL());
		}
		
		public function furnitureTMPL()
		{
			$tmplEngine = new TemplateEngine;
			echo $tmplEngine->getView("furniture_view.php", GetProductsModel::getAPPURL());
		}
		
		public function productsave()
		{
			if(!empty(json_decode($_SESSION["errors"])))
			{
				header('Location: '.GetProductsModel::getAPPURL().'/addproduct/');
			}
			
			else
			{
				GetProductsModel::saveProduct($_POST);
				header('Location: '.GetProductsModel::getAPPURL().'/home/');
			}
		}
		
		public function delprods()
		{
			GetProductsModel::deleteProducts($_POST);
			header('Location: '.GetProductsModel::getAPPURL().'/home/');
		}
	}
?>