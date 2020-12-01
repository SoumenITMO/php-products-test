<?php
	require_once "routeEngine.php";
	
	$route = new ROUTER_ENGINE;
	
	$route->get("home", "ProductController@home");
	$route->get("addproduct", "ProductController@addproduct");
	$route->get("dvd", "ProductController@dvdTMPL");
	$route->get("book", "ProductController@bookTMPL");
	$route->get("furniture", "ProductController@furnitureTMPL");
	$route->post("productsave", "ProductController@productsave");
	$route->post("delprods", "ProductController@delprods");