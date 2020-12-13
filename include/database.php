<?php

	class Database
	{		
		public function getPDOCon()
		{
			return  new PDO('mysql:host='.HOST.';dbname='.DB_DATABASE, DB_USER, DB_PASSWORD);
		}
	}
	
	
