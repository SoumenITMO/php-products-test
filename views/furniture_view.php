<style>
.div-container-specification {
	width: 26%;
	height: 45%;
	border: 2px solid green;
	padding: 10px;
	margin: 20px;
	display: inline-block;
}
</style>

<div class="div-container-specification">
	<label>Height (CM)</label>
	<input type="text" name="size[]" value="" placeholder="Enter Furniture Height" required /></br>
	<label>Width (CM)</label>
	<input type="text" name="size[]" value="" placeholder="Enter Furniture Width" required /></br>
	<label>Length (CM)</label>
	<input type="text" name="size[]" value="" placeholder="Enter Furniture Length" required /></br>
	<textarea name="product_specification" rows="12" cols="40" placeholder="Please Enter Description" required></textarea>
	<input type="hidden" name="specification_type" value="Dimention:" />
</div>