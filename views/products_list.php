<?php
	function generateView($data, $appURL)
	{
?>

<html>
<head>
<title> Products List </title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel = "stylesheet" type = "text/css" href = "../assets/css/main.css" />
<script src="../assets/js/main.js"></script>

</head>
<body>

<h2>Product List</h2>
<input type="button" value="ADD" onclick="location.href = '<?=$appURL?>/addproduct/'" class="add-btn"/>
<form action="<?=$appURL?>/delprods/" method="POST">
	<div class="div-container"> 
		<?php
			
			if(isset($data["products"]))
			{
				for($i = 0; sizeof($data["products"]) > $i; $i++)
				{
		?>
				<div class="product">
					<input type="checkbox" name="products[]" value="<?=$data["products"][$i]->getId()?>">
					<?=$data["products"][$i]->getSku()?>
					<?=$data["products"][$i]->getName()?>
					<?=$data["products"][$i]->getPrice()?>&nbsp;&#36;</br>
					<?=$data["products"][$i]->getProductSpecific()?>
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