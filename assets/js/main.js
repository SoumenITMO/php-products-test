$(document).ready(function()
{
	$("#product-type").on("change",function()
	{
		if(this.value != "")
		{
			$.ajax('appURL/'+this.value+'/',
			{
				success: function (data, status, xhr) 
				{
					$("#product-specification").html(data);
				}
			});
		}
		
		else 
		{
			$("#product-specification").html("");
		}
	});		
});