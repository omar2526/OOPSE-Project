<?php
//require_once("Order")
class Payment //implements Order
{
    private $payid;
    private $amount;
    private $transaction;
    private $paystatues;
    private $paymethod;
    public $discount;

    /* sets && gets*/
    ///////////////////////////
    public function getpayid()
    {
      return $this->payid;
    }
    public function setpayid($payid): self
    {
            $this->payid = $payid;

    }
    /////////////////////////////
    public function getamount()
    {
      return $this->amount;
    }
    public function setamount($amount): self
    {
            $this->amount = $amount;

    }
    ///////////////////////////////

    public function gettransaction()
    {
      return $this->transaction;
    }
    public function settransaction($transaction): self
    {
            $this->transaction = $transaction;

    }
    /////////////////////////////////
    public function getpaystatues()
    {
      return $this->paystatues;
    }
    public function setpaystatues($paystatues): self
    {
            $this->paystatues = $paystatues;

    }
    /////////////////////////////////////
    public function getpaymethod()
    {
      return $this->paymethod;
    }
    public function setpaymethod($paymethod): self
    {
            $this->paymethod = $paymethod;

    }
    /////////////////////////////////////
    public function getdiscount()
    {
      return $this->discount;
    }
    public function setdiscount($discount): self
    {
            $this->discount = $discount;

    }
    /* functions */

    public function processpay()
    {

    }
    public function refoundpay()
    {

    }
    public function viewpaystatues()
    {

    }
    public function updatepaystatues()
    {

    }
    public function applaydiscount($discount)
    {

    }
}
?>