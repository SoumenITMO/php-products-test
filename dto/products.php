<?php
class ProductsDto
{
    public $id;
    public $sku;
	public $name;
	public $price;
	public $product_specific;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
	
	public function getSku()
	{
		return $this->sku;
	}
	
	public function setSku($sku)
	{
		$this->sku = $sku;
		return $this;
	}
	
	public function getName() 
	{
		return $this->name;
	}
	
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
	
	public function getPrice()
	{
		return $this->price;
	}
	
	public function setPrice($price)
	{
		$this->price = $price;
		return $this;
	}
	
	public function getProductSpecific()
	{
		return $this->product_specific;
	}
	
	public function setProductSpecific($product_specific)
	{
		$this->product_specific = $product_specific;
		return $this;
	}
}
?>