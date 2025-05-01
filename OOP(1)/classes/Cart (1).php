<?php
require_once 'Product.php';
 class Cart
 {
   private$CartID;
    public $ContractorID;
    private $Products;
    fucntion AddToCart($CartID,$Products,$ContractorID)
    {

    }
    fucntion DeleteFromCart($Products)
    {

    }
    fucntion CheckOut()
    {

    }

    public function setCartID($cartID) {
        $this->cartID = $cartID;
    }

    public function setContractorID($contractorID) {
        $this->contractorID = $contractorID;
    }


    public function setProducts($products) {
        $this->products = $products;
    }


    public function getCartID() 
    {
      return $this->cartID;
  }

  public function getContractorID() 
  
  {
      return $this->contractorID;
  }

  public function getProducts()
   {
      return $this->products;
  }
 }
?>