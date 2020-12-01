<?php
	function generateView($data, $appURL)
	{
?>

<html>
<head>
<title> Products List </title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel = "stylesheet" type = "text/css" href = "<?=$appURL?>/assets/css/main.css" />
<script src="<?=$appURL?>/assets/js/main.js"></script>

</head>
<body>

<h2>Product List</h2>
<input type="button" value="ADD" onclick="location.href = '<?=$appURL?>/addproduct/'" class="add-btn"/>
			<form action="<?=$appURL?>/delprods/" method="POST">
				<div class="div-container"> 
					<?php
						
						if(isset($data["products"]))
						{
							foreach($data["products"] as $getProduct)
							{
					?>
							<div class="product">
								<input type="checkbox" name="products[]" value="<?=$getProduct["id"]?>">
								<?=$getProduct["sku"]?>
								<?=$getProduct["name"]?>
								<?=$getProduct["price"]?>&nbsp;&#36;</br>
								<?=$getProduct["product-specific"]?>
							</div>
					<?php
							}
						}
					?>
				</div>
				<button type="submit" value="Submit" class="submit-btn">MASS DELETE</button> 
			</form>

</body>
</html>

<?php
	}
?>