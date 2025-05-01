<?php
require_once("product.php");
require_once("location manger.php")
class warehouse {
    
    public $warehousename;
    public $product;

    public function getwarehousename()
    {
        return $this->warehousename;
    }


    public function setwarehousename($warehousename): self
    {
        $this->warehousename = $warehousename;

        return $this;
    }
    public function getproduct()
    {
        return $this->product;
    }


    public function setwarehousename($product): self
    {
        $this->product = $product;

        return $this;
    }
}
?>