<?php
	
	require_once "Model/productModel.php";
	require_once "templateEngine.php";
	require_once "include/env.php";
	
	class ProductController extends ProductsBaseClass
	{	
		public function home()
		{	
			$tmplEngine = new TemplateEngine;
			$tmplEngine->getView("products_list.php", APP_URL, array("products" => ProductsBaseClass::getAllProducts()));
		}
		
		public static function addproduct()
		{
			session_start();			
			$tmplEngine = new TemplateEngine;
			$tmplEngine->getView("product_add.php", APP_URL, array());
		}
		
		public function dvdTMPL()
		{
			$tmplEngine = new TemplateEngine;
			echo $tmplEngine->getView("dvd_view.php", APP_URL);
		}
		
		public function bookTMPL()
		{
			$tmplEngine = new TemplateEngine;
			echo $tmplEngine->getView("book_view.php", APP_URL);
		}
		
		public function furnitureTMPL()
		{
			$tmplEngine = new TemplateEngine;
			echo $tmplEngine->getView("furniture_view.php", APP_URL);
		}
		
		public function productsave()
		{
			if(!empty(json_decode($_SESSION["errors"])))
			{
				header('Location: '.APP_URL.'/addproduct/');
			}
			
			else
			{
				ProductsBaseClass::saveProduct($_POST);
				header('Location: '.APP_URL.'/home/');
			}
		}
		
		public function delprods()
		{
			ProductsBaseClass::deleteProducts($_POST);
			header('Location: '.APP_URL.'/home/');
		}
	}