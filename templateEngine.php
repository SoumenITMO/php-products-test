<?php
	class TemplateEngine
	{
		public function getView($file = "", $appURL, $data = array())
		{
			if(!empty($data))
			{
				require_once "views/" . $file;
				generateView($data, $appURL);
			}
			
			else if(empty($data))
			{
				require_once "views/" . $file;
			}
		}		
	}
?>