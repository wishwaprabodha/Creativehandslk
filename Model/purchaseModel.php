<?php
class purchase{
 
    private $purchaseId;
    private $userId;
    private $productId;
    
    function __construct($purchaseId, $userId, $productId) {
        $this->purchaseId = $purchaseId;
        $this->userId = $userId;
        $this->productId = $productId;
    }
    
    function getPurchaseId() {
        return $this->purchaseId;
    }

    function getUserId() {
        return $this->userId;
    }

    function getProductId() {
        return $this->productId;
    }
    
}
?>
