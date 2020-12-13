<?php
	$errors = array();
	if(!empty($_SESSION["errors"]))
	{
		if(isset(json_decode($_SESSION["errors"])[0]))
		{
			$errors = json_decode($_SESSION["errors"])[0];
		}
		$_SESSION["errors"] = "";
	}
?>

<html>
<head>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<link rel = "stylesheet" type = "text/css" href = "<?=$appURL?>/assets/css/main.css" />
<script src="<?=$appURL?>/assets/js/main.js"></script>
	
</head>
<title> Products Add </title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<body>

<h2>Product Add</h2>

<input type="button" value="CANCEL" onclick="location.href = '<?=$appURL?>/home/';" class="cancel-btn"/>
<div class="div-container">
	<form action="<?=$appURL?>/productsave/" method="POST">
		
		<label> SKU: </label>
		<input type="text" name="sku" value="" placeholder="SKU" class="field" />
		<?=isset($errors->sku) ? $errors->sku : "" ?></br>
		
		<label> Name: </label>
		<input type="text" name="name" value="" placeholder="Name" class="field" />
		<?=isset($errors->name) ? $errors->name : "" ?></br>
		
		<label> Price(&#36;): </label>
		<input type="number" step="0.01" name="price" value="" placeholder="Price" class="field" />
		<?=isset($errors->price) ? $errors->price : ""?></br>
		
		<label> Type Switcher: </label>
			<select name="product_type" id="product-type">
				<option value="">Select product type ... </option>
				<option value="dvd">DVD</option>
				<option value="book">Book</option>
				<option value="furniture">Furniture</option>
			</select>
		<div id="product-specification"></div>
		<input type="submit" value="SAVE" class="save-btn" />
	</form>
</div>
</body>
</html>