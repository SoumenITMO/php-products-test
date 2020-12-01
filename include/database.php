<?php
	require_once "env.php";

	class Database
	{
		private $DATABASE_CONNECTION;
		public function __construct()
		{
			$this->DATABASE_CONNECTION = mysqli_connect(HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
		}
		
		public function getAPPURL()
		{
			return APP_URL;
		}
		
		public function dbExecQuery($query = "")
		{
			return mysqli_query($this->DATABASE_CONNECTION, $query);
		}
	}