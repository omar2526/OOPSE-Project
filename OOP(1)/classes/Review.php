<?php

class review{
    public $reviewID;
    public $productID;
    public $UserID;
    public $rating;
    public $comment;

    public function setReviewID($reviewID)
    {
        $this->reviewID=$reviewID;
        
    }
    public function setProductID($productID)
    {
        $this->productIdID=$productID;
        
    }
    public function setUserID($UserID)
    {
        $this->UserID=$UserID;
        
    }
    public function setRating($rating)
    {
        $this->rating=$rating;
    }
    public function setcomment($comment)
    {
        $this->comment=$comment;
    }
    public function getReviewID()
    {
        return $this->reviewID;
    }
    public function getProductID()
    {
        return $this->productID;
    }
    public function getUserID()
    {
        return $this->UserID;
    }
    public function getRating()
    {
        return $this->rating;
    }
    public function getComment()
    {
        return $this->comment;
    }
}

?>