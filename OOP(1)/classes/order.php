<?php
require_once("payment.php")
class order{
public $location;
public $Whname;
public $ordate;
public $totalprice;
private $orderID;
function viewOrderDetails(){

}
function cancelOrder(){
}
function returnProduct(){
}
public function getlocation()
{
        return $this->location;
}

public function setlocation($location): self
{
        $this->location = $location;
}
public function getWhname()
{
        return $this->Whname;
}

public function setWhname($Whname): self
{
        $this->Whname = $Whname;

}
public function getordate()
{
        return $this->ordate;
}

public function setordate($ordate): self
{
        $this->ordate = $ordate;

}
public function gettotalprice()
{
        return $this->totalprice;
}

public function settotalpricee($totalprice): self
{
        $this->totalprice = $totalprice;

}
public function getorderID()
{
        return $this->orderID;
}

public function settotalpricee($orderID): self
{
        $this->orderID= $orderID;}
}
?>