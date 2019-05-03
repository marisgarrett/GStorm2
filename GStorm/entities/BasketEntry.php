<?php
    namespace GStorm\entities;

    class BasketEntry {
        private $productTable;
        
        public $basket_id;
        public $customer_id;
        public $product_id;
        public $quantity;

        public function __construct($productTable){
            $this->productTable = $productTable;
        }

        public function getProduct() {
            $products = $this->productTable->find('product_id', $this->product_id);
            
            if (count($products) > 0) {
                return $products[0];
            }

            return null;
        }
    }
 ?>