<?php
   require_once ("Contractor.php");
   require_once ("loaction_manger.php");
   require_once ("Warehouse.php");
   require_once ("admin.php");
   class product
    {
        public $product_name;
        private $ID;
        public $Price;
        public $product_details;
        public $quantity;
        public $picesnum;

       //get&set functions
        public function setproduct_name($product_name): self {
            $this->product_name =$product_name;
            return $this;
        }

        function getproduct_name() {
            return $this->product_name;
        }
        //////////////////
        public function setID($ID): self {
            $this->ID = $ID;
            return $this;
        }
        function getID() {
            return $this->ID;
        }
        ////////////////
        public function setPrice($Price): self {
            $this->Price = $Price;
            return $this;
        }

        function getPrice() {
            return $this->Price;
        }
        //////////////////
        public  function setproduct_details($product_details): self {
            $this->product_details = $product_details;
            return $this;
        }
        function getproduct_details() {
            return $this->product_details;
        }
        //////////////////////
        public function setquantity($quantity): self {
            $this->quantity = $quantity;
            return $this;
        }
        function getquantity() {
            return $this->quantity;
        }
        /////////////////////////
        public  function setpicesnum($picesnum): self {
            $this->picesnum = $picesnum;
            return $this;
        }

        function getpicesnum() {
            return $this->picesnum;
        }

        //function 
        public function Add_Product()
        {}
        public function UpdateProduct()
        {}
        public function DeleteProduct()
        {}
    }

?>