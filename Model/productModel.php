<?php

class product{
    
    private $productId;
    private $productName;
    private $productPrice;
    private $catagoryA;
    private $catagoryB;
    private $catagoryC;
    
    function __construct($productId, $productName, $productPrice, $catagoryA, $catagoryB, $catagoryC) {
        $this->productId = $productId;
        $this->productName = $productName;
        $this->productPrice = $productPrice;
        $this->catagoryA = $catagoryA;
        $this->catagoryB = $catagoryB;
        $this->catagoryC = $catagoryC;
    }
    function getProductId() {
        return $this->productId;
    }

    function getProductName() {
        return $this->productName;
    }

    function getProductPrice() {
        return $this->productPrice;
    }

    function getCatagoryA() {
        return $this->catagoryA;
    }

    function getCatagoryB() {
        return $this->catagoryB;
    }

    function getCatagoryC() {
        return $this->catagoryC;
    }

    function setProductName($productName) {
        $this->productName = $productName;
    }

    function setProductPrice($productPrice) {
        $this->productPrice = $productPrice;
    }

    function setCatagoryA($catagoryA) {
        $this->catagoryA = $catagoryA;
    }

    function setCatagoryB($catagoryB) {
        $this->catagoryB = $catagoryB;
    }

    function setCatagoryC($catagoryC) {
        $this->catagoryC = $catagoryC;
    }


    
}

?>

