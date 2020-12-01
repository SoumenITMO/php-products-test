<?php
	class VALIDATOR
	{
		var $param_errors = array();
		
		public function validate($form_data, $rules)
		{
			session_start();
			foreach($form_data as $key => $getFormData)
			{
				if(isset($rules[$key]))
				{
					$rule = explode("|", $rules[$key]);
					if($rule[0] == "required")
					{
						if($getFormData == "" || $getFormData == null)
						{
							array_push($this->param_errors, array($key => "Filed is required."));
							$_SESSION["errors"] = json_encode($this->param_errors);
							return;
						}
					}	
				}
			}
		}
		
		public function errors()
		{
			return $this->param_errors;
		}
	}	
?>