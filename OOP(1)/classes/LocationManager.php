<?php

require_once("user.php");

class LocationManager extends user
{
    private $MID;
    public $assignedWarehouse;
    public function setMID($MID)
    {
        $this->MID=$MID;
    }
    public function getMID()
    {
        return this->$MID
    }
    public function setAssignedWarehouse($assignedWarehouse)
    {
        $this->assignedWarehouse=$assignedWarehouse;
    }
    public function GetAssignedWarehouse($assignedWarehouse)
    {
       return $this->assignedWarehouse;
    }

    function addProduct($product)
    {

    }
    function updateProduct($productID)
    {

    }
    function generateSales()
    {

    }
    function ViewOrders()
    {

    }
    function StockAlert()
    {

    }
    function acceptOrder($orderID)
    {

    }

}

?>