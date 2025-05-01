<?php
require_once("user.php");
class Contractor extends user
{
    public $CompanyName;
    public $reviews;
    public $ContractorID;
    public $Location;
    public function BuyProduct($ProductID,$Quantity)
    {
    }
    public function ViewOrderDetails($OrderID)
    {
    }
    public  function ReviewProductDetails($ProductID)
    {
    }
    public  function Search()
    {
    }
    public   function ShowClientHistory()
    {
    }
    public  function DeleteReview($ReviewID)
    {
    }
    public  function AddReview($ProductID)
    {
    }
    public  function ViewReview($ProductID)
    {
    }
    public  function EditReview($ProductID)
    {
    }
    public  function MakeReview()
    {
    }
    
    public function setCompanyName($CompanyName) {
        $this->CompanyName = $CompanyName;
    }

    public function setReviews($reviews) {
        $this->reviews = $reviews;
    }

    public function setContractorID($ContractorID) {
        $this->ContractorID = $ContractorID;
    }

    public function setLocation($Location) {
        $this->Location = $Location;
    }


    public function getCompanyName() {
        return $this->CompanyName;
    }

    public function getReviews() {
        return $this->reviews;
    }

    public function getContractorID() {
        return $this->ContractorID;
    }

    public function getLocation() {
        return $this->Location;
    }






}


?>